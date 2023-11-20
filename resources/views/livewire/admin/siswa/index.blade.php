<div>
    {{-- {{ response()->json($students, 200) }} --}}
    <div class="row">
        <div class="col-xl-6">
            @auth('admin')
                <div class="row">
                    <div class="col-xl-3 mb-2">
                        <a href="{{ route('admin.siswa.create') }}" style="width: 100%" class="btn btn-primary waves-effect waves-light">
                            <i class="fa fa-plus fa-fw"></i> Tambah Siswa
                        </a>
                    </div>

                    <div class="col-xl-4 mb-2">
                        <a style="width: 100%" href="{{ route('admin.siswa.create', ['excel' => true]) }}"
                            class="btn btn-success waves-effect waves-light mt-">
                            <i class="fa fa-plus fa-fw"></i> Tambah Siswa via Excel
                        </a>
                    </div>
                </div>
            @endauth
        </div>

        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-4 mb-2">
                    <div wire:ignore>
                        <select class="form-select js-example-basic-single form-control" style="width: 100%" name="state" id="state">
                            <option value = "0" selected>Pilih Kelas</option>
                            @foreach ($classList as $kelas)
                                <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xl-4 mb-2">
                    <div wire:ignore>
                        <select class="form-select" style="width: 100%" wire:model='filterSort' name="state"
                            id="state">
                            <option value="asc" selected>ASC</option>
                            <option value="desc">DESC</option>
                        </select>
                        @error('kelas')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-xl-4 mb-2">
                    <input type="text" class="form-control" wire:model="textFilter" placeholder="Cari Nama">
                </div>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><i class="mdi mdi-format-list-bulleted-square"></i>Data Siswa</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive mt-2">
                <table class="table table-bordered mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            <th>Username</th>
                            <th>Point Pelanggaran</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($students as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->identity_number }}</td>
                                <td>{{ $item->full_name }}</td>
                                <td>{{ strtoupper($item->gender) }}</td>
                                <td>{{ $item->kelas->name }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->total_point }}</td>
                                <td>
                                    <a href="{{ route('admin.siswa.show', $item->id) }}"
                                        class="btn btn-primary">Detail</a>
                                    @auth('admin')
                                        <button class="btn btn-danger" title="Delete"
                                            data-delete-id={{ $item->id }}>Delete</button>
                                        <a href="{{ route('admin.siswa.edit', $item->id) }}"
                                            class="btn btn-primary">Edit</a>
                                    @endauth
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row align-items-center mt-3">
                <div class="pagination d-none"></div>
                <div class="col">
                    <p class="mb-0 fs--1">
                        <span class="d-none d-sm-inline-block" data-list-info="data-list-info">{{ $data_from }} to
                            {{ $data_to }} of {{ $data_all }}</span>
                    </p>
                </div>

                <div class="col-auto d-flex">
                    @if (!$textFilter && !$kelasId)
                        {{ $itemsPaginate->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    // window.addEventListener('initSomething', event => {
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

    $('.js-example-basic-single').on('change', function() {
        // alert(this.value);
        Livewire.emit('onChangeKelas', this.value)
    });

    $("button[title=\"Delete\"]").click(function() {
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
                Livewire.emit('delete', _this.data("delete-id"));
            }
        });
    });
</script>
