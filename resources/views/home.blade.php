@extends('admin.layouts.auth-app')
@section('title', 'Home')
@section('content')
    <div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">Selamat Datang di Aplikasi Pelanggaran Siswa</h5>
                        </div>
                        <div class="p-2 mt-4">
                            <a href="{{ route('admin.auth.login') }}" class="btn btn-block btn-success d-block mb-2">Login
                                Admin</a>
                            <a href="{{ route('guru.auth.login') }}" class="btn btn-block btn-primary d-block mb-2">Login
                                Guru</a>
                            <a href="{{ route('auth.siswa.login') }}" class="btn btn-block btn-warning d-block">Login
                                Siswa</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div>

@endsection
