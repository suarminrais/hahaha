@extends('main')

@section('title', "| Home")

@section('content')
<div class="row" style="margin-top: 15px;">
    <div class="col-sm-10">
        <h4><i class="fa fa-photo"></i> MY ART STYLES</h4>
    </div>
    <div class="col-sm-2">
        <a href="{{ route('artis.post') }}"><i style="margin-right: 5px;" class="fa fa-plus"></i>Post Art Styles</a>
    </div>
    <div class="row" style="margin-top: 15px;">
        <div class="col-sm-12">
            @foreach($data as $datas)
            <img src="{{ asset('images/').'/'.$datas->post_image }}" style="width: 30%;float:left; margin-right: 10px;" alt="Sorry">
            <h5><a href="{{ route('item', $datas->id) }}">{{ $datas->nama }} | Rp.{{ $datas->harga }}</a></h5>
              @if($datas->ulasan()->count()==0)
              @else
              <img class="img-rev" src="../img/icon/star.png">
              <img class="img-rev" src="../img/icon/star.png">
              <img class="img-rev" src="../img/icon/star.png">
              <img class="img-rev" src="../img/icon/star.png">
              <img class="img-rev" src="../img/icon/star.png">
              @endif
              Ulasan({{$datas->ulasan()->count()}})
            <br><br>
            <!-- <button type="button" class="btn btn-success">Promote</button> -->
            <a href="{{ route('post.edit', $datas->id) }}" class="btn btn-dark">Edit</a>
            <a href="" class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $datas->id }}').submit();"><i class="fa fa-window-close"></i>Delete</a>
            <form id="delete-form-{{ $datas->id }}" action="{{ route('artis.delete',$datas->id) }}" method="POST" style="display: none;">
                @csrf @method('delete')
            </form>
            <div class="notif">
                <br>
            </div>
            <br>
            <br>
            @endforeach
        </div>

    </div>
</div>
      <br>
    <hr>

<div class="row">
    <div style="padding-left: 450px">
        {{ $data->links() }}
    </div>
</div>

@endsection
