@extends('main')

@section('title', "| $data->nama")

@section('content')
<div class="row">
  <div class="col-md-4">
    <div class="container" style="background-color: white;">
      <center><img src="{{asset('img/avatar.png')}}" style="max-width: 200px; padding: 10px;"></center>
      <h3>{{$data->name}}</h3>
      <p>Anggota Sejak: {{substr($data->created_at,0,4)}}</p>
      <p>Penjualan : 7</p>
      <p>Ulasan:
        <img class="img-rev" src="{{asset('img/icon/star.png')}}">
        <img class="img-rev" src="{{asset('img/icon/star.png')}}">
        <img class="img-rev" src="{{asset('img/icon/star.png')}}">
        <img class="img-rev" src="{{asset('img/icon/star.png')}}">
        <img class="img-rev" src="{{asset('img/icon/star.png')}}">
      </p>
      <button type="button" class="btn btn-outline-warning"><img class="btn-img" src="{{asset('img/icon/contact.png')}}">
        Hubungi Saya</button>
      <br><br>
    </div>
  </div><!-- end md4 -->

  <div class="col-md-8">
    <div class="card text-center">
      <div class="card-header">
        <h1>Portofolio</h1>
      </div>
      <div class="card-body">
        <div class="row">
          @foreach($basis as $base)
          <div class="col-md-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{ asset('images/').'/'.$base->post_image }}" alt="" />
                  <h2>Rp.{{$base->harga}}</h2>
                  <p>{{$base->nama}}</p>
                  <a href="{{ route('item', $base->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                    Beli</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div><!-- end md8 -->
</div>
<br><!-- end row -->
@stop