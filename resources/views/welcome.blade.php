@extends('main')

@section('style')
    <style>
      .banner {
        background-color: aqua;
      }
    </style>
@stop

@section('header')
    <header class="jumbotron" align="center">
        <h1 class="display-3">Banner</h1>
        <p class="lead">Cara Pembeliannya</p>
    </header>
@stop

@section('content')
      <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="features_items"><!--features_items-->
                        <!-- <h2 class="title text-center">Features Items</h2> -->
                        <div class="row">
                        @foreach($data as $datas)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ asset('images/').'/'.$datas->post_image }}" alt="" />
                                            <h2>Rp.{{ $datas->harga }}</h2>
                                            <p>{{ $datas->nama }}</p>
                                            <a href="{{ route('item', $datas->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>Rp.{{ $datas->harga }}</h2>
                                                <p>{{ $datas->nama }}</p>
                                                <a href="{{ route('item', $datas->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{ $data->links() }}
                            </div>
                        </div>
                      </div>
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>
@stop