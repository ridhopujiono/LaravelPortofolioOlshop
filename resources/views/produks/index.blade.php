@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Produks</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <a class="btn btn-danger mb-2" href="{{ route('produks.create') }}">Tambah Produk <span
                                class="ml-2 fa fa-plus"></span></a>
                    </div>
                    <div class="card p-3">
                        <div class="card-body">
                            @include('produks.table')
                            <div class="pull-right mr-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
