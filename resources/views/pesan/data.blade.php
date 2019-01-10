@extends('pesan.message')

@section('data')
<div class="mesgs">
          <div class="msg_history">
            @foreach($set as $s)
            @if($s->pesan!=NULL)
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>{{ $s->pesan }}</p>
                  <span class="time_date"> {{ substr($s->created_at, 11) }}   |    {{ substr($s->created_at, 0,11) }}</span></div>
              </div>
            </div>
            @endif
            @if($s->reply!=NULL)
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>{{ $s->reply }}</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>
            @endif
            @endforeach
          </div>
          <form action="{{route('pesan.pos')}}" method="post"> @csrf
                <div class="hidden">
                  <input type="text" name="user" value="{{Auth::id()}}">
                  <input type="text" name="nama" value="{{Auth::user()->name}}">
                  <input type="text" name="buyer" value="{{$id}}">
                </div>
                <div class="form-group row">
                    <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label> -->
                    <div class="col-sm-10">
                        <textarea class="form-control" name="pesan" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="col-sm-2">
                        <button style="border-radius: 5px;" type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
           </form>
		</div>
@stop