@extends('main')
@section('style')
<style>
footer {
      margin-top: 18%;
    }
</style>
@stop
@section('content') 
    <div class="row">
      <div class="col-sm-2"></div>
        <div class="col-sm-8" style="background-color: white;padding: 10px; ">
          <form action="{{route('pesan.post')}}" method="post"> @csrf 
          <h3>
            <img src="{{asset('img/avatar.png')}}" width="50px">&nbsp;Percakapan dengan <span style="color:#64b5f6;">{{$data->name}}</span>
          </h3>
          <br>
          <div class="form-group">
            <div class="hidden">
              <input name="buyer" type="text" value="{{ Auth::guard('buyer')->user()->id }}">
              <input name="nama_buyer" type="text" value="{{ Auth::guard('buyer')->user()->name }}">
              <input name="user" type="text" value="{{ $data->id }}">
            </div>
            <label for="exampleFormControlTextarea1">Kirim pesan ke mabar</label>
            <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="float: right;">Kirim</button>
         </form>
        </div>
      <div class="col-sm-2"></div>
    </div>
@stop