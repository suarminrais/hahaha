@extends('main')

@section('style')
<style>
    footer{
          margin-top: 1%;
      }
</style>
@stop

@section('title', '| Rating')

@section('content')
        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-12">
                <h4><i class="fa fa-id-card-o"></i> EDIT PROFILE</h4>  
            </div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-12">
                <form method="POST" action="{{ route('buyer.profilee', $data->id) }}">
                    @csrf @method('PUT')
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Your Full Name : </label>
                        <div class="col-sm-10">
                        <input type="text" name="name" value="{{$data->name}}" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Location : </label>
                        <div class="col-sm-10">
                            <input type="text" name="lokasi" value="{{$data->lokasi}}" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">About You :</label>
                        <div class="col-sm-10">
                            <textarea name="about" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data->about}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Paypal Email / No.Rekening : </label>
                        <div class="col-sm-10">
                        <input name="rekening" type="text" value="{{$data->rekening}}" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div> --}}
                    <div class="form-group row" align="right">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@stop