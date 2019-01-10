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
    <br><br>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background-color: white;">
          <br>
          <h3><img class="btn-img" src="{{asset('img/icon/cart.png')}}">Pembelian Saya</h3>
          <hr>
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" id="btn-purchases">
              <a class="nav-link active" href="{{ url('/')}}">Pesan Baru</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <hr>
              @foreach($data as $d)
              @if($d->status!='CANCEL')
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
                  @endif
                  @endforeach
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$d->id}}">
                      Jejak
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="{{$d->id}}" tabindex="{{$d->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pelacakan</h5>
                          </div>
                          <div class="modal-body">
                            <ul class="list-group">
                              <li class="list-group-item list-group-item-warning">{{$d->status}}</li>
                            </ul>
                            <br>
                            @if($d->status!='BERHASIL')
                            <form action="{{route('order.updat',$d->id)}}" method="post">@csrf @method('PUT')
                              <div class="form-group">
                                <select name="status" id="">
                                  <option value="CANCEL">CANCEL</option>
                                </select>
                              </div>
                              <div class="input-group mb-2 mr-sm-2">
                                <button type="submit" class="btn btn-warning" style="color: white;">Kirim</button>
                              </div>
                            </form>
                            @endif
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <br>
              @endif
              @endforeach
              <hr>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Tidak ada pesanan yang dibatalkan.</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Tidak ada pesanan yang selesai.</div>
          </div>

          <br>
        </div>
        <div class="col-md-2"></div>
      </div>

<div class="row">
    <div style="padding-left: 450px">
        {{ $data->links() }}
    </div>
</div>

@endsection
