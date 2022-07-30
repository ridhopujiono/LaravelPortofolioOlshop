@extends('utama.main.main')
@section('container')
    <div class="site-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-md-12 mb-3">
                    <h2 class="h3 mb-3 text-white text-center">List Produk</h2>
                </div>
                <div class="col-md-12 order-1">
                    <div class="row mb-5">

                        @foreach ($data as $d)
                            <div class="col-lg-4 col-md-4 item-entry mb-4">
                                <a href="#" class="product-item md-height bg-gray d-block">
                                    <img src="{{ asset($d->foto) }}" alt="Image" class="img-fluid">
                                </a>
                                <h2 class="item-title"><a href="#">{{ $d->nama_produk }}</a></h2>
                                <strong class="item-price text-white">{{ $d->harga }}</strong>
                            </div>
                        @endforeach
                    </div>


                    <div class="row">
                        <div class="col-md-12 text-center">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
