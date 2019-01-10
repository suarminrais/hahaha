@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>
                <div class="card-body">
                    <table class="table table-responsive-xl">
                        <thead>
                            <tr>
                                <th scope="col">Nama produk</th>
                                <th scope="col">Username artist</th>
                                <th scope="col">Username customer</th>
                                <th scope="col">Tanggal pemesanan</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Status</th>
                                <th scope="col">Forward</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            @foreach($let as $l)
                            @if($l->id == $d->customer_id)
                            @foreach($bet as $b)
                            @if($b->id == $d->post_id)
                            <tr @if($d->status=='BERHASIL')class="table-success"@else class="table-warning"@endif>
                                <td>{{$b->nama}}</td>
                                <td>{{$d->by}}</td>
                                <td>{{$l->name}}</td>
                                <td>{{$d->created_at}}</td>
                                <td>Seminggu Setelah Pemesanan</td>
                                <td>Rp. {{$d->total}}</td>
                                <td>{{$d->status}}</td>
                                <td>
                                    <a href="{{route('home.updat',$d->id)}}" class="btn btn-info">BUKA</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            @endif
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection