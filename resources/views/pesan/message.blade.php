@extends('main')
@section('style')
<link rel="stylesheet" href="{{asset('css/chat.css')}}">
@stop
@section('content')
      <br>
	<h3 class="text-center">Messaging</h3>
	<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
          </div>
          <div class="inbox_chat">
            @foreach($data as $d)
            @if($d->nama_buyer!=NULL)
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <a href="{{route('artis.message.det', $d->buyer_id)}}"><h5>{{$d->nama_buyer}}<span class="chat_date">{{substr($d->created_at,0,11)}}</span></h5></a>
                  <p>{{$d->pesan}}</p>
                </div>
              </div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
        @yield('data')
        
	   </div>
    </div>
@stop