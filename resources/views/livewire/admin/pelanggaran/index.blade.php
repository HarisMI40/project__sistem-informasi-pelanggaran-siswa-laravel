<div>

    <div class="row">
        <div class="col-lg-12 mb-2">
            <form>
                <div class="row">
                    {{-- <div class="form-group col-md-6">
                        <label for="">Limit</label>
                        <select wire:model="paginate" class="form-control">
                            <option value="10">Default</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="50">100</option>
                        </select>
                    </div> --}}
                    <div class="form-group col-md-6">
                        <label for="">Pencarian</label>
                        <input wire:model="search" class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="mdi mdi-format-list-bulleted-square"></i> Pelanggaran</h4>
                </div>
                <div class="card-body">
                    @auth("admin")
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#create">
                            <i class="fa fa-plus fa-fw"></i> Tambah Data Pelanggaran
                        </button>
                    @endauth
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered mb-0">
                            <thead  class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>jenis Pelanggaran</th>
                                    <th>Nama</th>
                                    <th>Point</th>
                                    @auth("admin")
                                        <th>Aksi</th>
                                    @endauth
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $value)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $value->jenis_pelanggaran }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->point }}</td>
                                    {{-- <td><button class="btn btn-sm btn-danger" wire:click.prevent="delete({{$value->id}})">Hapus</button></td> --}}
                                    @auth("admin")
                                        <td>
                                            {{-- <button class="btn btn-sm btn-danger" onclick="hapus({{$value->id}})">Hapus</button> --}}
                                            <a href="javascript:void(0);" class="px-3 text-danger" onclick="hapus({{$value->id}})"><i class="uil uil-trash-alt font-size-18"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit" wire:click="edit({{ $value->id }})" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                        </td>
                                    @endauth
                                    {{-- <td>
                                        <div class="form-check form-switch mb-3" dir="ltr">
                                            <input type="checkbox" class="form-check-input" id="customSwitch1" wire:click="changeIsActive({{ $value->id }}, {{ $value->is_active }})" {{ $value->is_active == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="customSwitch1">{{ $value->is_active == 1 ? 'Aktif' : 'Nonaktif' }}</label>
                                        </div>
                                    </td>
                                    <td>{{ parseCarbon($value->created_at)->isoFormat('dddd, D MMMM Y, HH:mm:ss') }}</td>
                                    <td>{{ parseCarbon($value->updated_at)->isoFormat('dddd, D MMMM Y, HH:mm:ss') }}</td> --}}
                                    <td>
                                        {{-- <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl" wire:click="edit({{ $value->id }})" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a> --}}
                                        {{-- <a href="javascript:void(0);" class="px-3 text-danger"  wire:click="delete({{ $value->id }})"><i class="uil uil-trash-alt font-size-18"></i></a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    {{-- {{ $lists->links() }} --}}
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    @auth("admin")
        <!--  Extra Large modal example -->
        <div wire:ignore.self id="create" class="modal fade bs-example-modal-xl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel"><i class="fa fa-plus fa-fw"></i>Tambah Pelanggaran</h5>
                        <button type="button" wire:click.prevent="closeModal()" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                            @include('livewire.admin.pelanggaran.create')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        {{-- <button wire:click.prevent="closeModal()" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> --}}
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



        <div wire:ignore.self id="edit" class="modal fade bs-example-modal-xl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel"><i class="fa fa-plus fa-fw"></i> Edit Pelanggaaran</h5>
                        <button type="button" wire:click.prevent="closeModal()" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                            @include('livewire.admin.pelanggaran.edit')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        {{-- <button wire:click.prevent="closeModal()" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> --}}
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->




        <script type="text/javascript">
            window.livewire.on('adminRefresh', () => {
                Swal.hideLoading()
                $('.bs-example-modal-xl#create').modal('hide');
            });
        </script>


        <script>
            function hapus(id){
                if(confirm("apakah anda ingin menghapus data ini ?")  == true) {
                    Livewire.emit('delete',id)
                    // alert(id);
                }
            }

            window.livewire.on('adminRefresh', () => {
                Swal.hideLoading()
                $('.bs-example-modal-xl').modal('hide');
            });
        </script>
    @endauth
</div>


