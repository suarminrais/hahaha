@extends('main')

@section('title', '| payments')

@section('content')
        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-8">
                <h4><i class="fa fa-money"></i> PAYMENTS</h4>
            </div>
            <div class="col-sm-3">
                <h5>Saldo Anda : <i style="color:orange;">Rp. {{$total}}</i></h5>
                <a class="btn btn-primary" href="">Tarik</a>
            </div>
            @foreach($set as $s)
                @foreach($data as $d)
                @if($d->id == $s->post_id)
                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-12">
                        <img src="{{ asset('images/').'/'.$s->gambar }}" style="width: 40%;float:left; margin-right: 10px;" alt="">
                        <div style="margin-right: 50px">
                            <a class="lead" style="font-weight: bold" href="{{route('item',$d->id)}}">{{$d->nama}}</a>
                            <br>
                            <span class="lead">Status : </span><span @if($s->status=="BERHASIL")style="color: green"@elseif($s->status=="PROSES")style="color: blue"@elseif($s->status=="CANCEL")style="color: red"@endif class="lead">{{$s->status}}</span>
                            <br> 
                            <table class="lead">
                                <tr>
                                    Harga : <b>Rp.{{$s->total}}</b>
                                </tr>
                                <tr>
                                    @if(($s->status!="TERIMA" && $s->status!="CANCEL" && $s->status!="BERHASIL") || $s->status=="PROSES"))
                                    <form action="{{route('tolak', $s->id)}}" method="post" class="form-group">@csrf @method('PUT')
                                        <div class="hidden"><input name="status" type="text" value="TERIMA"></div>
                                        <td><button class="btn btn-success" type="submit">Terima</button></td>
                                    </form>
                                    @endif
                                    @if($s->status=="TERIMA" || $s->status=="PROSES")
                                    <form action="{{route('tolak', $s->id)}}" method="post" class="form-group">@csrf @method('PUT')
                                        <div class="hidden"><input name="status" type="text" value="CANCEL"></div>
                                        <td><button class="btn btn-danger" type="submit">Tolak</button></td>
                                    </form>
                                    @endif
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            @endforeach
            </div>
        </div>
        <br>
        <hr>
@stop