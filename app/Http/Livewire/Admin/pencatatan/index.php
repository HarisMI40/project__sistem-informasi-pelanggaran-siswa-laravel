<?php

namespace App\Http\Livewire\Admin\pencatatan;

use App\Events\PelanggaranInserted;
use App\Models\Admin;
use App\Models\ClassList;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\ViolationCategory;
use App\Models\ViolationLists;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Exception;

use Livewire\WithFileUploads;

use Livewire\Component;

class Index extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $count = 0, $kelas = "", $students = [], $pelanggarans = [], $pelanggaranSiswa = [], $no = 1;

    public $inputKelas, $inputPelanggaran, $inputSiswa, $inputCatatan, $search, $searchKelas;
    public $photo;

    protected $listeners = ['updateSiswa' => 'updateSiswa', 'updatePelanggaran' => 'updatePelanggaran', 'delete' => 'delete', 'searchKelas'];

    public function resetInput()
    {
        $this->inputCatatan = "";
    }

    public function mount()
    {
        $this->students = $this->getDataSiswa();
        $this->pelanggarans = ViolationCategory::all();
    }

    public function render()
    {
        $dataKelas = ClassList::all();
        // dd($kelas);
        $tanggalSekarang = date("Y-m-d");
        if ($this->search <> null and $this->searchKelas <> null) {
            $data = ViolationLists::with("student", "jenisPelanggaran")
                ->whereHas("student", function ($query) {
                    $query->where("full_name", "LIKE", "%{$this->search}%");
                    $query->where("class_id", "=", "$this->searchKelas");
                })
                ->orWhereHas("jenisPelanggaran", function ($query) {
                    $query->where("jenis_pelanggaran", "LIKE", "%{$this->search}%");
                    $query->orWhere("name", "LIKE", "%{$this->search}%");
                })
                ->where("created_at", "LIKE", "%$tanggalSekarang%")
                ->orderBy('created_at', 'desc')
                ->get();
        } elseif ($this->search <> null) {
            $data = ViolationLists::with("student", "jenisPelanggaran")
                ->where("created_at", "LIKE", "%$tanggalSekarang%")
                ->whereHas("student", function ($query) {
                    $query->where("full_name", "LIKE", "%{$this->search}%");
                })
                ->orWhereHas("jenisPelanggaran", function ($query) {
                    $query->where("jenis_pelanggaran", "LIKE", "%{$this->search}%");
                    $query->orWhere("name", "LIKE", "%{$this->search}%");
                })
                ->orderBy('created_at', 'desc')
                ->get();
        } elseif ($this->searchKelas <> null) {
            $data = ViolationLists::with("student", "jenisPelanggaran")
                ->where("created_at", "LIKE", "%$tanggalSekarang%")
                ->whereHas("student", function ($query) {
                    $query->where("class_id", "=", "$this->searchKelas");
                })
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            $data = ViolationLists::with("student", "jenisPelanggaran")
                ->where("created_at", "LIKE", "%$tanggalSekarang%")->orderBy('created_at', 'desc')
                ->get();
        }
        return view('livewire.admin.pencatatan.index', compact('data', 'dataKelas'));
    }

    function updateSiswa($value)
    {
        $input = explode(",", $value);

        $this->inputSiswa = $input[0];
        $this->inputKelas = $input[1];
    }


    function updatePelanggaran($value)
    {
        $this->inputPelanggaran = $value;
    }

    protected $rules = [
        'inputPelanggaran' => 'required',
        'inputSiswa' => 'required',
        'photo' => 'max:5024'
        // Aturan validasi lainnya...
    ];

    function store()
    {
        $this->validate();
        $admin = Auth::guard('admin')->check();
        $teacher = Auth::guard('teacher')->check();
        // dd( Auth::guard('admin')->user()->id);
        $report_by = "";
        $user = "";
        
        if ($admin) {
            $user = Admin::find(Auth::guard('admin')->user()->id);
            $report_by = "admin";
        } else if ($teacher) {
            $user = Teacher::find(Auth::guard('teacher')->user()->id);
            $report_by = "teacher";
        }
        
        try {
            $data = [
                "clas" => $this->inputKelas,
                "violation_category_id" => $this->inputPelanggaran,
                "student_id" => $this->inputSiswa,
                "note" => $this->inputCatatan,
                "report_by" => $report_by,
                'photo_proof' => $this->photo->hashName(),
                "admin_id" => $admin ? Auth::guard('admin')->user()->id : Null,
                "teacher_id" => $teacher ? Auth::guard('teacher')->user()->id : Null,
                "status" => "confirm"
            ];
            $this->photo->store('photos');
            
            // $newData = ViolationLists::create($data);
            $newData = $user->violationLists()->create($data);
            
            $this->resetInput();
            
            // event(new PelanggaranInserted(true));
            $this->alert('success', 'Data berhasil di tambahkan', [
                'toast' => true,
                'position' => 'top-right',
                'showConfirmButton' => false,
                'timer' => 3000
            ]);
        } catch (Exception $e) {
            dd($e);
        }

    }

    function delete($id)
    {
        $pelanggaran = ViolationLists::find($id);
        $pelanggaran->delete();

        $this->alert('success', 'Data berhasil di hapus', [
            'toast' => true,
            'position' => 'top-right',
            'showConfirmButton' => false,
            'timer' => 3000
        ]);
    }

    function getDataSiswa()
    {
        return Student::with([
            "kelas" => function ($query) {
                $query->select('id', 'name');
            }
        ])->select("id", 'full_name', 'class_id')->get();
    }

    function searchKelas($id)
    {
        $this->searchKelas = $id;
    }
}
