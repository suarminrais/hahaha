@extends('main')

@section('title', '| Rating')

@section('content')
        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-10">
                <h4><i class="fa fa-star"></i> RATING & REVIEWS</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    </div>
            </div>
            @foreach($set as $s)
            @if($s->status == "BERHASIL")
                @foreach($data as $d)
                @if($d->id== $s->post_id)
                <div class="row" style="margin-bottom: 12px">
                    <div class="col-sm-12">
                        <img src="{{ asset('images/').'/'.$d->post_image }}" style="width: 40%;float:left; margin-right: 10px;" alt="">
                        <h5><a href="{{route('item',$d->id)}}"> {{$d->nama}}</a></h5>
                        <div class="hidden">
                        {{ $ulas = $d->ulasan()->orderBy('id','desc')->first()}}
                        </div>
                        <p><b>"{{$ulas->ulasan}}"</b></p>
                        <p>
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
                      <br> <small>{{$ulas->created_at}}</small></p>
                    </div>
                </div>
                @endif
                @endforeach
            @endif
            @endforeach
            </div>
        </div>
        <br>
        <hr>
@stop