@extends('main')

@section('style')
    <style>
      body{
        background-color: #e0e0e0;
      }
      .banner {
        background-color: aqua;
      }
      footer{
          margin-top: 15%;
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

      <br>
        <div class="row">   
          <div class="col-md-7"><!-- main -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding: 5px;background-color: white;"><!-- CAROUSEL -->
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active">
                  <img src="{{ asset('images/').'/'.$data->post_image }}" alt="">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/').'/'.$data->post_image }}" alt="">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/').'/'.$data->post_image }}" alt="">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
              </a>
            </div><!-- end coruesel -->
            <div class="card text-center" style="margin-top: 10px;"><!-- CARD DESC -->
              <div class="card-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                      aria-selected="true">Deskripsi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                      aria-selected="false">Ulasan({{$data->ulasan()->count()}})</a>
                  </li>
                </ul>
              <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="desc">
                      <p class="card-text" align="justify">{{ $data->deskripsi }}</p>
                      <br>
                      <b>Lama Pengerjaan :</b> {{$data->devday}} hari, <b>Dibuat dengan :</b> {{$data->tools}}
                      <hr>
                      <p align="left"><strong>Basic Artwork Includes</strong><br>  
                      <div class="row">
                        <div class="col-md-5">
                          <b>Warna:</b>
                          @foreach($data->artbasics as $datas)
                          <span >{{ $datas->nama}} </span>
                          <br> 
                          @endforeach
                          <b># Subyek:</b>
                          @foreach($data->subs as $datas)
                          <span >{{ $datas->nama}} </span>
                          <br> 
                          @endforeach
                          <b>Komposisi:</b>
                          @foreach($data->image as $datas)
                          <span >{{ $datas->nama}} </span>
                          <br> 
                          @endforeach
                          <b>Latar Belakang:</b>
                          @foreach($data->bg as $datas)
                          <span >{{ $datas->nama}} </span>
                          <br> 
                          @endforeach
                        </div>
                      </div>
                      </p>
                      <hr>
                  </div>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="desc">
                  @foreach($data->ulasan as $ulas)
                  <div class="row">
                    <div class="col-md-2">
                      <img src="../img/avatar.png" width="50px" height="50px">
                    </div>
                    <div class="col-md-8">
                      <b style="float: left; color: blue">{{$ulas->name}}</b>
                      <br>
                      <p align="justify">{{$ulas->ulasan}}</p>
                      <p class="comment-time">{{$ulas->created_at}}</p>
                    </div>
                    <div class="col-md-2">
                      @if($ulas->bintang==1)
                      <img class="img-rev" src="../img/icon/star.png">
                      @elseif($ulas->bintang==2)
                      <img class="img-rev" src="../img/icon/star.png">
                      <img class="img-rev" src="../img/icon/star.png">
                      @elseif($ulas->bintang==3)
                      <img class="img-rev" src="../img/icon/star.png">
                      <img class="img-rev" src="../img/icon/star.png">
                      <img class="img-rev" src="../img/icon/star.png">
                      @elseif($ulas->bintang==4)
                      <img class="img-rev" src="../img/icon/star.png">
                      <img class="img-rev" src="../img/icon/star.png">
                      <img class="img-rev" src="../img/icon/star.png">
                      <img class="img-rev" src="../img/icon/star.png">
                      @else
                      <img class="img-rev" src="../img/icon/star.png">
                      <img class="img-rev" src="../img/icon/star.png">
                      <img class="img-rev" src="../img/icon/star.png">
                      <img class="img-rev" src="../img/icon/star.png">
                      <img class="img-rev" src="../img/icon/star.png">
                      @endif
                    </div>
                  </div>
                  @endforeach
                  <hr>
                  <br>
                </div>
              </div>
              </div>
            </div><!-- END CARD DESC -->
          </div>
          </div><!-- end main -->
          
          <div class="col-md-5"><!-- side -->
              <div class="container" style="background-color: white;">
                <div class="row">
                  <div class="col-md-2">
                    <br>
                    <img class="btn-img" src="{{ asset('../img/icon/verified.png') }}" style="margin-left: 20px;">
                  </div>
                  <div class="col-md-8">
                    <br>
                    <h3>Available now</h3>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-3">
                    <img src="../img/avatar.png" width="80px" height="80px">
                    <br><br>
                    <a href="{{ route('pesan', $data->by) }}" class="btn btn-primary">Message</a>
                  </div>
                  <div class="col-md-8">
                    <p>Art by: <a href="{{ route('artis.profil', $data->by ) }}">{{ $data->by }}</a></p>
                    <img class="img-rev" src="{{ asset('../img/icon/star.png') }}">
                    <img class="img-rev" src="{{ asset('../img/icon/star.png') }}">
                    <img class="img-rev" src="{{ asset('../img/icon/star.png') }}">
                    <img class="img-rev" src="{{ asset('../img/icon/star.png') }}">
                    <img class="img-rev" src="{{ asset('../img/icon/star.png') }}">
                    <br>Jumlah ulasan({{$data->ulasan()->count()}})
                    <br><br>
                    <img class="btn-img" src="{{ asset('../img/icon/place.png') }}">
                    {{$user->lokasi}}
                  </div>
                </div>
                <br>
            </div><!-- end first container -->
            <br>
          <div class="container" id="app" style="background-color: white;">
          <h3>{{$data->nama}}</h3>
          <hr>
          <form class="form" action="{{ route('order')}}" method="post"> @csrf
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
          <hr>
          <div class="row">
            <div class="col-md-8">
              <h4 class="cost"><b>Biaya</b></h4>
            </div><!-- end md 5 -->
            <div class="col-md-4">
              <h4><b>Rp. @{{harga + selected}} </b></h4>
            </div>
          </div><!-- end row -->
          @if (!Auth::guard('buyer')->guest())
            <div class="row hidden">
              <div class="col-md-12">
                <input name="buyer" value="{{ Auth::guard('buyer')->id() }}" type="text">
              </div>
              <div class="col-md-12">
                <input name="nama" value="{{ $data->by }}" type="text">
              </div>
              <div class="col-md-12">
                <input name="pic" value="{{ $data->post_image }}" type="text">
              </div>
              <div class="col-md-12">
                <input name="post" value="{{ $data->id}}" type="text">
              </div>
              <div class="col-md-12">
                <textarea name="total">@{{harga + selected}}</textarea>
              </div>
            </div>
            <center><button type="submit" class="btn btn-outline-warning">Pesan</button></center>
          </form>
          @elseif(!Auth::user())
          <center><a href="{{route('buyer.login')}}" class="btn btn-outline-warning">Pesan</a></center>
          @endif
          <br>
        </div>
          </div><!-- end side -->
        </div>
      <br>
@stop

@section('js')
<script>
  var app = new Vue({
    el: '#app',
    data: {
      message: 'hello vue js',
      warna: false,
      badan: false,
      warnaLatar: false,
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