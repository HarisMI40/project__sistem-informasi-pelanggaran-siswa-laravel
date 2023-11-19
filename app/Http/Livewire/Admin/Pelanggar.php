<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tatib_pasal;
use Livewire\Component;
use App\Models\ViolationCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Exception;
class Pelanggar extends Component
{
    use LivewireAlert;

    public $pelanggaran, $no = 1, $search;
    protected $listeners = ['delete', 'adminRefresh', 'update'];
    public $isFormEdit = false;

    public $primaryKey, $jenis_pelanggaran, $name, $point;

    public function resetInput(){
        $this->jenis_pelanggaran = "";
        $this->name = "";
        $this->point = "";
    }

    public function render()
    {
        // $this->pelanggaran = $this->getSortedData();
        $pasal = Tatib_pasal::with('bab')->get();
        $dataQuery = ViolationCategory::orderBy('name', 'ASC');
        if ($this->search <> null) {
            // dd($this->search);
            $dataQuery->where(function ($query) {
                $query->where('id', 'like', '%'.$this->search.'%')
                ->orWhere('jenis_pelanggaran', 'like', '%'.$this->search.'%')
                ->orWhere('name', 'like', '%'.$this->search.'%')
                ->orWhere('point', 'like', '%'.$this->search.'%');
            });
            $data = $this->getSortedData($dataQuery->orderBy('name', 'asc')->get());
        } else{
            $dataQuery = ViolationCategory::orderBy('name', 'asc')->get();
            $data = $this->getSortedData($dataQuery);
        }


        return view('livewire.admin.pelanggaran.index', compact('data', 'pasal'));
    }

    public function adminRefresh()
    {
        # code...
    }

    function store(){

        try {
            $data = [
                "jenis_pelanggaran" => $this->jenis_pelanggaran,
                "name" => $this->name,
                "point" => $this->point,
            ];



            // dd($data);

            $newData = ViolationCategory::create($data);
            $this->alert('success', 'Berhasil menambahkan data Pelanggaran #' . $newData->id);
            $this->resetInput();
            $this->emit('adminRefresh');
        } catch (Exception $e) {
            // return $e;
            dd($e);
        }

    }

    public function edit(ViolationCategory $pelanggaran){
        // $this->isFormEdit = true;
        $this->primaryKey = $pelanggaran->id;
        $this->jenis_pelanggaran = $pelanggaran->jenis_pelanggaran;
        $this->name = $pelanggaran->name;
        $this->point = $pelanggaran->point;

    }

    public function update($inputPelanggaran){
        $pelanggaran = ViolationCategory::find($inputPelanggaran['id']);
        $pelanggaran->update([
            'jenis_pelanggaran' => $inputPelanggaran['jenis'],
            'name' => $inputPelanggaran['nama'],
            'point' =>$inputPelanggaran['point'],
            'pasal_id' => $inputPelanggaran['pasal_id'],
        ]);


        $this->alert('success', 'Berhasil mengubah data Pelanggaran #' . $pelanggaran->id);

        $this->resetInput();

        $this->emit('adminRefresh');
    }


    function delete(ViolationCategory $pelanggaran){

        $pelanggaran->delete();

        $this->alert('success', 'Data berhasil di hapus', [
            'toast' => true,
            'position' => 'top-right',
            'showConfirmButton' => false,
            'timer' => 3000
        ]);
    }

    function getSortedData($data){

        $groupedData = collect($data);
        $sorted = $groupedData->sortBy(function ($item, $key) {
            if ($item['jenis_pelanggaran'] == 'pelanggaran ringan') {
                return 1;
            } elseif ($item['jenis_pelanggaran'] == 'pelanggaran sedang') {
                return 2;
            } elseif ($item['jenis_pelanggaran'] == 'pelanggaran berat') {
                return 3;
            } else {
                return 999;
            }
        });

        // return $sorted;
        return $sorted->values()->all();
    }


    public function closeModal(){
        // $this->resetInputFields();
        // dd($this->pelanggaran);
        // $this->isFormEdit = false;
    }
}
