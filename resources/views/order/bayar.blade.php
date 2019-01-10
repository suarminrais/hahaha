@extends('main')
@section('style')
<style>
	body{
	  background-color: #eceff1;
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
<script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
@stop

@section('content')
<div id="app">
    <div class="row">
      <!-- row breadcrumb -->
      <div class="col-md-7">
        <div aria-label="breadcrumb">
          <ol class="breadcrumb" style="background-color:#ef5350;">
            <li class="breadcrumb-item"><a href="{{route('order.data',$post->id)}}" style="color: white;">Unggah foto</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#" style="color: white;">Info
                pembayaran</a></li>
            <li class="breadcrumb-item active" aria-current="page">Konfirmasi</li>
          </ol>
        </div>
        <p align="justify">Harap Periksa dengan teliti pesanan anda. Pastikan anda telah memasukkan semua detail dan
          sumber daya artis untuk menyelesaikan karya seni anda.</p>
      </div>
    </div><!-- end row breadcrumb -->

    <div class="row">
      <!-- row main content -->
      <div class="col-md-7">
        <!-- col md 7 -->
        <br>
        <div class="container" style="background-color: #ffffff;padding: 10px;border-radius: 5px;">
          <br>
          <div class="row" style="display: flex;">
            <div class="col-md-9 col-sm-1">
              <p>Info Pemesanan</p>
            </div>
            <div class="col-md-3 col-sm-1">
              <a href="{{route('order.data',$post->id)}}"><img class="btn-img" src="{{asset('img/icon/edit.png')}}">Upload Ulang</a>
            </div>
          </div>
          <hr>
          <p>Foto Kamu</p>
          <center><img class="card-img-top" src="{{ asset('images/').'/'.$post->gambar }}" alt="Card image cap" style="max-width: 400px;"></center>
          <br>
          <div class="row">
            <div class="col-md-4">
              <b>
                <p>Orientasi :</p>
              </b>
              <b>
                <p>Intruksi Tambahan:</p>
              </b>
            </div>
            <div class="col-md-4">
              <p>{{ $post->orientasi }}</p>
              <p>{{ $post->instruksi }}</p>
            </div>
          </div>
          <br>
        </div>
        <br>
        <div class="container" style="background-color: #ffffff;padding: 10px;border-radius: 5px;">
          <br>
          <table width="100%">
            <tr>
              <td>
                <p>Pembaharuan Tersedia: </p>
              </td>
              <td>
                <p>Harga</p>
              </td>
            </tr>
            @foreach($data->artups as $datas)
            <tr>
              <td>
                <div class="form-check">
                  @if($datas->id==1)
                  <input type="checkbox" v-on:click=" harga1" v-model="toggle1" false-value="no" true-value="yes">
                  @elseif($datas->id==2)
                  <div class="row">
                    <div class="col-md-3">
                      <select v-model="selected">
                        <option v-for="option in options" v-bind:value="option.value">
                          @{{ option.text }}
                        </option>
                      </select>
                    </div>
                    <div class="col-md-9">
                      <span>{{$datas->option}}</span>
                    </div>
                  </div>
                  @elseif($datas->id==3)
                  <input type="checkbox" v-on:click=" harga3" v-model="toggle3" false-value="no" true-value="yes">
                  @elseif($datas->id==4)
                  <input type="checkbox" v-on:click=" harga4" v-model="toggle4" false-value="no" true-value="yes">
                  @elseif($datas->id==5)
                  <input type="checkbox" v-on:click=" harga5" v-model="toggle5" false-value="no" true-value="yes">
                  @endif
                  <label class="form-check-label">
                    @if($datas->id!=2)
                    {{$datas->option}}
                    @endif
                  </label>
                </div>
              </td>
              <td>
                @if($datas->id==1)
                Rp.&nbsp;{{ $data->extra_1 }}
                @elseif($datas->id==2)
                Rp.&nbsp;{{ $data->extra_2 }}
                @elseif($datas->id==3)
                Rp.&nbsp;{{ $data->extra_3 }}
                @elseif($datas->id==4)
                Rp.&nbsp;{{ $data->extra_4 }}
                @elseif($datas->id==5)
                Rp.&nbsp;{{ $data->extra_5 }}
                @endif
              </td>
            </tr>
            @endforeach
          </table>
          <table class="table" width="100%">
            
          </table>
        </div>
      </div><!-- end col md7 -->

      <div class="col-md-5">
        <br>
        <div class="container" style="position: fixed; width:500px; background-color: #ffffff;padding: 10px;border-radius: 5px;">
          <br>
          <b>
            <p>Ringkasan Pesanan:</p>
          </b>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <p>Total Pesanan:</p>
            </div>
            <div class="col-md-5">
              <h3 style="color: orange;">Rp.&nbsp;@{{harga + selected}}</h3>
            </div>
          </div>
          <hr>
          <form action="{{route('bayar.full',$post->id)}}" method="post">@csrf @method('PUT')
          <div class="form-group hidden">
          	<textarea name="total" cols="30" rows="3">@{{harga + selected}}</textarea>
          </div>
          <center><button type="submit" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Bayar
              Sekarang</button>
          </center>
		  </form>
          <br>
        </div><!-- end side container -->
      </div>
    </div>
</div><!-- end row main content -->
@stop

@section('js')
<script>
  var app = new Vue({
    el: '#app',
    data: {
      message: 'hello vue js',
      harga: {!! $data->harga!!},
      item1: {!! $data->extra_1 !!},
      item2: {!! $data->extra_2 !!},
      item3: {!! $data->extra_3 !!},
      item4: {!! $data->extra_4 !!},
      item5: {!! $data->extra_5 !!},
      selected: 0,
      options: [{
          text: 0,
          value: 0
        },
        {
          text: 1,
          value: 1 * {!! $data->extra_2 !!}
        },
        {
          text: 2,
          value: 2 * {!! $data->extra_2 !!}
        },
        {
          text: 3,
          value: 3 * {!! $data->extra_2 !!}
        },
        {
          text: 4,
          value: 4 * {!! $data->extra_2 !!}
        },
        {
          text: 5,
          value: 5 * {!! $data->extra_2 !!}
        },
        {
          text: 6,
          value: 6 * {!! $data->extra_2 !!}
        },
        {
          text: 7,
          value: 7 * {!! $data->extra_2 !!}
        },
        {
          text: 8,
          value: 8 * {!! $data->extra_2 !!}
        },
        {
          text: 9,
          value: 9 * {!! $data->extra_2 !!}
        },
        {
          text: 10,
          value: 10 * {!! $data->extra_2 !!}
        },
        {
          text: 11,
          value: 11 * {!! $data->extra_2 !!}
        },
        {
          text: 12,
          value: 12 * {!! $data->extra_2 !!}
        },
        {
          text: 13,
          value: 13 * {!! $data->extra_2 !!}
        },
        {
          text: 14,
          value: 14 * {!! $data->extra_2 !!}
        },
        {
          text: 15,
          value: 15 * {!! $data->extra_2 !!}
        }
      ]
    },
    methods: {
      harga1: function () {
        if (app.toggle1 === 'yes') {
          this.harga -= app.item1
        } else {
          this.harga += app.item1
        }
      },
      harga2: function () {
        if (app.toggle2 === 'yes') {
          this.harga -= app.item2
        } else {
          this.harga += app.item2
        }
      },
      harga3: function () {
        if (app.toggle3 === 'yes') {
          this.harga -= app.item3
        } else {
          this.harga += app.item3
        }
      },
      harga4: function () {
        if (app.toggle4 === 'yes') {
          this.harga -= app.item4
        } else {
          this.harga += app.item4
        }
      },
      harga5: function () {
        if (app.toggle5 === 'yes') {
          this.harga -= app.item5
        } else {
          this.harga += app.item5
        }
      }
    }
  })
</script>
@stop