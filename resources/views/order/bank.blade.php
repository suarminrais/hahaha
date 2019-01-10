@extends('main')
@section('style')
    <style>
        .banner {
            background-color: aqua;
        }
        footer{
            margin-top: 12%;
        }
        label {
            margin-top: 10%;
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
        .bank3, .bank2 {
            margin-left: 5%;
        }
        img {
            padding-bottom: 10px;
        }
    </style>
@stop
@section('content')
        <div class="row">
            <div class="col-md-6">
                <br>
                <h2>Pembayaran Melalui Transfer</h2>
                <p>
                    Untuk pembayarannya dapat langsung transfer ke Admin yaa :) <br> 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 " align="center">
                <img src="{{asset('img/bri.jpg')}}" alt="bri" width="200" height="100">
                <h6>Aditya Permana</h6>
                <h6>124124442335</h6>
            </div>
            <div class="col-md-2 bank2" align="center">
                <img src="{{asset('img/bni.png')}}" alt="bri" width="200" height="100">
                <h6>Aditya Permana</h6>
                <h6>124124442335</h6>
            </div>
            <div class="col-md-2 bank3" align="center">
            <img src="{{asset('img/mandiri.png')}}" alt="bri" width="200" height="100">
                <h6>Aditya Permana</h6>
                <h6>124124442335</h6>
            </div>
        </div>
        <div class="row">
            <div class="lead">
                <p style="padding-left: 450px; padding-top: 100px; font-weight: bold;">Jumlah Tagihan : Rp.{{$total}}</p>  
            </div>
        </div>
@stop