@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>
                <div class="card-body">
                    <form action="{{route('home.update',$data->id)}}" method="POST">@csrf @method('PUT')
                    <table class="table table-responsive-xl">
                        <thead>
                            <tr>
                                <th scope="col">Username artist</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Pilih Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$data->by}}</td>
                                <td>Rp. {{$data->total}}</td>
                                <td><select class="form-control" name="status" id="">
                                    <option value="BERHASIL">BERHASIL</option>
                                    <option value="CANCEL">CANCEL</option>   
                                </select></td>
                                <td>
                                    <button type="submit" class="btn btn-info">BUKA</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection