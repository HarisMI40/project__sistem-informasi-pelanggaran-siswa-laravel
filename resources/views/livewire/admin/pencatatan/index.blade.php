<div>
    <div class="row">
        <div class="col-xl-4 form_pencatatan">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="" class="py-3">
                

                <div class="mb-3" wire:ignore>
                    <label for="exampleFormControlInput1" class="form-label">Siswa</label>
                    <select class="form-select js-example-basic-single" id="selectSiswa" name="state" id="state">
                        <option value = "" selected>Pilih Siswa</option>
                            @foreach($this->students as $student)
                                <option value="{{$student->id.",".$student->kelas->name}}">{{$student->kelas->name}} - {{$student->full_name}}</option>
                            @endforeach
                        </optgroup>
                    </select>

                    {{-- @error('inputSiswa') <span class="error">{{ $message }}</span> @enderror --}}

                </div>

                <div class="mb-3" wire:ignore>
                    <label for="exampleFormControlInput1" class="form-label">Pelanggaran</label>

                    @if(count($pelanggarans) > 0)
                        <select class="form-select js-example-basic-single" id="selectPelanggaran">
                            <option value="" selected>Pilih Pelanggaran</option>
                            @foreach($this->pelanggarans as $pelanggaran)
                                <option value="{{$pelanggaran->id}}">{{substr($pelanggaran->jenis_pelanggaran, 12)}} - {{$pelanggaran->name}}</option>
                            @endforeach
                        </select>
                        {{-- @error('inputPelanggaran') <span class="error">{{ $message }}</span> @enderror --}}
                    @else
                        <p>Tidak Ada Data Pelanggaran</p>
                    @endif
                </div>


                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Catatan ( Opsional )</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Catatan Untuk Siswa" wire:model="inputCatatan"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="photo" class="form-label">Photo ( Opsional )</label>
                    <input type="file" wire:model="photo" class="form-control" id="photo">

                    {{-- <div wire:loading wire:target="photo" class="text-info">Mengupload Foto ...</div> --}}
                    <div wire:loading wire:target="photo" class="text-info mt-2">
                        <div class="spinner-border text-info spinner-border-sm" role="status">
                            <span class="sr-only"> Mengupload Foto ...</span>
                        </div>
                            Mengupload Foto ...
                    </div>
                </div>

                <div class="form-submit" style="display: flex;align-items: center;gap: 10px;">
                    <input type="button" value="Simpan" class="btn btn-primary" wire:click.prevent="store()" wire:loading.attr="disabled" />

                    <div wire:loading wire:target="store">
                        <div class="spinner-border text-info" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="mt-5 mt-xl-0 col-xl-8">
            <div class="row mb-2">
                <div class="form-group col-md-6">
                    <label for="">Pencarian</label>
                    <input wire:model="search" class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>

                <div class="col-md-6" wire:ignore>
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <select class="form-select js-example-basic-single" id="selectSearchKelas" name="state" id="state">
                        <option value = "" selected>Pilih Kelas</option>
                            @foreach($dataKelas as $kelas)
                                <option value="{{$kelas->id}}">{{$kelas->name}}</option>
                            @endforeach
                    </select>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="mdi mdi-format-list-bulleted-square"></i>Pelanggaran Siswa</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered mb-0">
                            <thead  class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Pelanggaran</th>
                                    <th>Pelapor</th>
                                    <th class="d-none d-lg-block">Point</th>
                                    {{-- <th class="">Status</th> --}}
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $value)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $value->student->full_name }}</td>
                                    <td>{{ $value->clas }}</td>
                                    <td>{{ $value->jenisPelanggaran->name }}</td>
                                    <td>{{$value->created_by->username}}</td>
                                    <td class="d-none d-lg-block">{{ $value->jenisPelanggaran->point }}</td>
                                    {{-- <td class=""><span class="badge {{ $value->status === 'confirm' ? 'bg-primary' : ($value->status === 'pending' ? 'bg-warning' : 'bg-danger')}}">{{ $value->status  }}</span></td> --}}
                                    @if((auth()->guard('teacher')->check() && $value->teacher_id == auth()->guard('teacher')->user()->id) or auth()->guard('admin')->check())
                                        <td> <a href="javascript:void(0);" class="px-3 text-danger" onclick="hapus({{$value->id}})"><i class="uil uil-trash-alt font-size-18"></i></a></td>
                                    @endauth
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @section("scripts") --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        // window.addEventListener('initSomething', event => {
        $(document).ready(function() {
            $('.js-example-basic-single').select2();

            $('#selectSiswa').on('change', function() {
                // alert( this.value );
                Livewire.emit('updateSiswa', this.value)
            });
            $('#selectPelanggaran').on('change', function() {
                // alert( this.value );
                Livewire.emit('updatePelanggaran', this.value)
            });
            $('#selectSearchKelas').on('change', function() {
                // alert( this.value );
                Livewire.emit('searchKelas', this.value)
            });
        });

        function hapus(id) {
            let _this = $(this);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('delete', id);
                }
            });
        };
        // }
    </script>

{{-- @endsection --}}
