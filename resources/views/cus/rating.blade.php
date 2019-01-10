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
      margin-top: 17.6%;
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
<br>
<div class="row">
  <div class="col-md-2"></div>

  <div class="col-md-8" style="background-color: white;">
    <br>
    <h3><img class="btn-img" src="{{asset('img/icon/star.png')}}">Peringkat & Ulasan</h3>
    <hr>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              @foreach($data as $d)
              <div class="row">
                <hr>
                <div class="col-md-4">
                  <img src="{{ asset('images/').'/'.$d->gambar }}" width="200px;">
                </div>
                <div class="col-md-8">
                  @foreach($set as $s)
                  @if($s->id == $d->post_id)
                  <h3>{{$s->nama}} | Rp.{{$d->total}}</h3>
                  <p class="lead"><i>By {{$d->by}}</i></p>               
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$d->id}}">
                      Rate
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="{{$d->id}}" tabindex="{{$d->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pelacakan</h5>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('ulas',$d->post_id)}}" method="post">@csrf
                              <div class="hidden">
                                <input type="text" name="name" value="{{ Auth::guard('buyer')->user()->name }}">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" maxlength="1" name="bintang" placeholder="Jumlah Bintang(1-5)">
                              </div>
                              <div class="input-group mb-2 mr-sm-2">
                                <textarea name="ulasan" class="form-control" placeholder="Ulasan"></textarea>
                                <button type="submit" class="btn btn-warning" style="color: white;">Rate</button>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  @endforeach
                </div>
              </div>
              <br>
              @endforeach
              <hr>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Tidak ada pesanan yang dibatalkan.</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Tidak ada pesanan yang selesai.</div>
          </div>
    <br><br>
  </div><!-- end md8 -->

  <div class="col-md-2"></div>
</div>
@endsection