@extends('main')

@section('title', '| My Sales')

@section('content')
        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-10">
                <h4><i class="	fa fa-handshake-o"></i> MY SALES</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked> Completed
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option2" autocomplete="off"> Canceled
                        </label>
                      </div>
            </div>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-sm-12">
                        <img src="../img/helloworld.jpg" style="width: 40%;float:left; margin-right: 10px;" alt="">
                        <h5><a href=""> Art Order #NoPembeli - Client: Mucijr</a></h5>
                        <button type="button" class="btn btn-success"> <i class="fa fa-comments-o"></i> Project Tracker</button>
                        <button type="button" class="btn btn-warning"> <i class="fa fa-file-pdf-o"></i> Order Print</button>
                        <br><br>
                        <p>Notice<i>Completed on 23 Oktober 2018</i> <a href="#">Lihat Orderannnya</a></p> 
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-sm-12">
                        <img src="../img/helloworld.jpg" style="width: 40%;float:left; margin-right: 10px;" alt="">
                        <h5><a href=""> Art Order #NoPembeli - Client: Mucijr</a></h5>
                        <button type="button" class="btn btn-success"> <i class="fa fa-comments-o"></i> Project Tracker</button>
                        <button type="button" class="btn btn-warning"> <i class="fa fa-file-pdf-o"></i> Order Print</button>
                        <br><br>
                        <p>Notice<i>Completed on 23 Oktober 2018</i> <a href="#">Lihat Orderannnya</a></p> 
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-sm-12">
                        <img src="../img/helloworld.jpg" style="width: 40%;float:left; margin-right: 10px;" alt="">
                        <h5><a href=""> Art Order #NoPembeli - Client: Mucijr</a></h5>
                        <button type="button" class="btn btn-success"> <i class="fa fa-comments-o"></i> Project Tracker</button>
                        <button type="button" class="btn btn-warning"> <i class="fa fa-file-pdf-o"></i> Order Print</button>
                        <br><br>
                        <p>Notice<i>Completed October 23 Oktober 2018</i> <a href="#">Lihat Orderannnya</a></p> 
                    </div>
                </div>
            </div>
        </div>
@stop