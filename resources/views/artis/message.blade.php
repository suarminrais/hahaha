@extends('main')

@section('title', '| payments')

@section('style')
    <style>
        footer{
            margin-top: 92px;
        }
    </style>
@stop

@section('content')
        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-12">
                <h4><i class="fa fa-envelope"></i> MESSAGES</h4>  
            </div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-12">
                <form>
                    <div class="form-group row">
                        <label for="inputNama" class="col-sm-2 col-form-label">Your Full Name : </label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputNama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email Tujuan : </label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Pesan :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row" align="right">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@stop