@extends('admin.layouts.app')
@section('title', $page['title'])
@section('style')
    <style>
        .form_pencatatan{
            background: #86bae7;
            position: absolute;
            bottom: 20px;
            left: 0;
            z-index: 999;
        }

        .form_pencatatan form label{
            display : block;
        }

        .tombol-toggle-pencatatan{
            position: absolute;
            bottom: 3vh;
            z-index: 99999;
            right: 5vh;
        }
        span.select2-container{
            width: 100% !important;
        }

        .table-responsive{
            overflow-y: auto;
            max-height: 500px;
        }

        @media(min-width : 992px){
            .form_pencatatan{
                background: none;
                position: static;
            }
        }
    </style>
@endsection
@section('content')
@livewire('admin.pencatatan.index')
@endsection
{{-- @section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>



            $('.js-example-basic-single').select2();

            $('.js-example-basic-single').on('change', function() {
                // alert( this.value );
                Livewire.emit('postAdded', this.value)
            });
    </script>
@endsection --}}
