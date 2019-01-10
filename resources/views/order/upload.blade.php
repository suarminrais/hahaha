@extends('main')
@section('style')
<style>
    body{
      background-color: #eceff1 ;
    }
	footer{
	  margin-top: 18%;
	}
	nav .artist li a {
	  font-size: 0.5em;
	}
	.fa-star{
	  color: orange;
	}
	.fa-heart {
	color: salmon;
	}
</style>
@stop

@section('content')

	<div style="margin-top: 10px" class="row">
      <!-- row breadcrumb -->
      <div class="col-md-6">
        <div aria-label="breadcrumb">
          <ol class="breadcrumb" style="background-color:#ef5350;">
            <li class="breadcrumb-item"><a href="#" style="color: white;">Unggah foto</a></li>
            <li class="breadcrumb-item active" aria-current="page">Info pembayaran</li>
            <li class="breadcrumb-item active" aria-current="page">Konfirmasi</li>
          </ol>
        </div>
      </div>
    </div><!-- end row breadcrumb -->
    <div class="row">
      <!-- row main content -->
      <div class="col-md-7">
        <div class="container" style="background-color: #ffffff;padding: 10px;border-radius: 5px;">
          <form action="{{route('order.update',$data->id)}}" enctype="multipart/form-data" method="post"> @csrf @method('PUT')
          <br>
          <p align="justify">Silahkan upload foto yang akan dikerjkan. Foto yang diupload akan diproses sesegera mungkin. Pastikan foto yang diupload berukuran baik sehingga pada saat pembuatan hasil sesuai gambar yang diinginkan.</p>
          <br>
          <center><b>Upload Foto</b></center>
          <center>
	      	<img class="btn-img" src="../img/icon/photo-camera.png"
                style="margin-right: 5px;"><input type="file" name="upload" class="btn btn-danger" id="exampleFormControlFile1">
          </center>
          <br>
          <p align="justify">Instruksi untuk artis! <br>
          </p>
          <div class="form-group">
            <textarea name="instruksi" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Contoh: Tolong ganti modelnya, tambahkan aksesoris, dan lain-lain..."></textarea>
          </div>
          <br>
          <div class="row">
            <!-- row layout -->
            <div class="col-md-4">
              <img class="card-img-top"  src="{{ asset('images/').'/'.$data->pic }}" alt="">
              <div class="form-check" align="center">
                <input class="form-check-input" type="radio" name="gambar" id="exampleRadios2" value="Potrait">
                <label class="form-check-label" for="exampleRadios2">
                  Potrait
                </label>
              </div>
            </div>
            <div class="col-md-4">
              <img class="card-img-top"  src="{{ asset('images/').'/'.$data->pic }}" alt="">
              <div class="form-check" align="center">
                <input class="form-check-input" type="radio" name="gambar" id="exampleRadios2" value="Landscape">
                <label class="form-check-label" for="exampleRadios2">
                  Landscape
                </label>
              </div>
            </div>
            <div class="col-md-4">
              <img class="card-img-top"  src="{{ asset('images/').'/'.$data->pic }}" alt="">
              <div class="form-check" align="center">
                <input class="form-check-input" type="radio" name="gambar" id="exampleRadios2" value="Square">
                <label class="form-check-label" for="exampleRadios2">
                  Square
                </label>
              </div>
            </div>
          </div>
          <br>
          <center><button type="submit" class="btn btn-info">Kirim</button></center>
          </form>
        </div><!-- end row layout -->
        <br>
        <br>
      </div>

      <div class="col-md-5">
        <div class="container" style="background-color: #ffffff;padding: 10px;border-radius: 5px;">
          <hr>
          <div class="row">
            <div class="col-md-3">
              <p>Total Pesanan:</p>
            </div>
            <div class="col-md-5">
              <h3 style="color: orange;">Rp.{{$data->total}}</h3>
            </div>
          </div>
          <hr>
        </div><!-- end first container -->
        <br>
        <div class="container" style="background-color: #ffffff;padding: 10px;border-radius: 5px;">
          <br>
          <img src="../img/icon/verified.png" style="max-width: 30px;margin-left: 20px;">
          <span>Tersedia Sekarang</span>
          <hr>
          <div class="row">
            <div class="col-md-3">
              <img src="../img/avatar.png" width="80px" height="80px">
              <br><br>
            </div>
            <div class="col-md-8">
              <p>Seni Oleh: {{ $post->name }}</p>
              <img class="img-rev" src="../img/icon/star.png">
              <img class="img-rev" src="../img/icon/star.png">
              <br><br>
              <img class="icon" src="../img/icon/place.png" style="max-width: 30px;">
              {{$post->lokasi}}
            </div>
          </div>
          <br><br>
        </div><!-- end second container -->
      </div>
    </div><!-- end row main content -->
@stop