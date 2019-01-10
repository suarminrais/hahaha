@extends('main')

@section('title', '| Post')

@section('style')
    <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
@stop


@section('content')
        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-12">
                <h4><i class="fa fa-photo"></i> Post An Art Style</h4>  
            </div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div id="app" class="col-sm-12">
                <form method="POST" action="{{ route('post.art') }}" enctype="multipart/form-data"> @csrf
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Name Item : </label>
                        <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Price : </label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">Rp.</div>
                                </div>
                                <input name="harga" type="text" class="form-control" placeholder="Harga yang anda inginkan!" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                            <label name="art_id" class="col-sm-2 col-form-label">Art Style : </label>
                            <div class="col-sm-10">
                                <select name="art_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Art Subject : </div>
                        <div class="col-sm-10">
                        <div class="form-check">
                        @foreach($categories as $category)
                        
                            <input class="form-check-input" value="{{ $category->id }}" name="categories[]" type="checkbox" id="gridCheck1">
                            <label for="categories[]" class="form-check-label" for="gridCheck1">
                            {{ $category->nama }}
                            </label><br>    
                   
                        @endforeach
                     </div>    
                    </div>
                    </div>
                    <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Description:</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tools" class="col-sm-2 col-form-label">Created with:  </label>
                        <div class="col-sm-10">
                        <input type="text" name="tools" class="form-control" id="inputEmail3" placeholder="ex. Photoshop, Corel">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="devday" class="col-sm-2 col-form-label">Lama Pengerjaan : </label>
                        <div class="col-sm-10">
                        <input type="text" name="devday" placeholder="ex. 1,2,3.." class="form-control">
                        </div>
                    </div>
                    <div class="row-group row">
                        <div class="col-sm-12">
                            <hr>     
                            <h5>Basic Artwork Includes</h5>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Color</div>
                    @foreach($basic as $basic)
                    @if($basic->id!=2)
                        <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" @if($basic->id==3) v-model="warna" @endif value="{{ $basic->id }}" name="artbasics[]" type="checkbox" id="gridCheck1">
                            <label for="art_basic_id" class="form-check-label" for="gridCheck1">
                            {{ $basic->nama }}
                            </label>
                        </div>
                        </div>
                        <div class="col-sm-2"></div>
                    @endif
                    @endforeach
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"># of Subjects</div>
                    @foreach($su as $sub)
                        <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" value="{{ $sub->id }}" name="subs[]" type="checkbox" id="gridCheck1">
                            <label for="art_basic_id" class="form-check-label" for="gridCheck1">
                            {{ $sub->nama }}
                            </label>
                        </div>
                        </div>
                        <div class="col-sm-2"></div>
                    @endforeach
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Image Composition</div>
                    @foreach($comp as $comps)
                        <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" @if($comps->id==3) v-model="badan" @endif value="{{ $comps->id }}" name="comps[]" type="checkbox" id="gridCheck1">
                            <label for="art_basic_id" class="form-check-label" for="gridCheck1">
                            {{ $comps->nama }}
                            </label>
                        </div>
                        </div>
                        <div class="col-sm-2"></div>
                    @endforeach
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Background</div>
                    @foreach($bg as $b)
                        <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" @if($b->id==3) v-model="warnaLatar" @endif value="{{ $b->id }}" name="bg[]" type="checkbox" id="gridCheck1">
                            <label for="art_basic_id" class="form-check-label" for="gridCheck1">
                            {{ $b->nama }}
                            </label>
                        </div>
                        </div>
                        <div class="col-sm-2"></div>
                    @endforeach
                    </div>
                    <div class="row-group row">
                        <div class="col-sm-12">
                            <hr>     
                            <h5>Artwork Upgrades</h5>
                        </div>
                    </div>
                    <div class="row-group row">
                        <!-- <div class="col-sm-2"></div> -->
                        <div class="col-sm-3 offset-2">
                            <h6>Options: </h6>
                        </div>
                        <div class="col-sm-2">
                            <h6>Extra Price: </h6>
                        </div>
                    </div>
                    @foreach($up as $up)
                    <div class="row-group row" @if($up->id==1) v-if="hilang"@elseif($up->id==3)v-if="hilang2" @elseif($up->id==4)v-if="hilang3" @endif style=" margin-top: 5px;">
                        <div class="col-sm-3 offset-2">
                            <div class="form-check">
                            <input class="form-check-input" value="{{ $up->id }}" name="artups[]" type="checkbox" id="gridCheck1">
                            <label>
                                    {{ $up->option }}
                            </label>
                        </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">Rp.</div>
                                </div>
                                <input type="text" name="extra_{{ $up->id }}" class="form-control" value="0" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            </div>   
                        </div>
                    </div>
                    @endforeach
                    <div class="row-group row">
                        <div class="col-sm-12">   
                            <h5>Sample artwork:</h5>
                            <hr>
                            <p class="sample"><i> Include reference photo if possible. Images must be .JPG. </i> <span> All NSFW images must be CENSORED to be approved!</span></p>
                        </div>
                    </div>
                    <div class="hidden">
                        <input type="text" name="by" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group row file">
                        <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">Your Photo : </label> -->
                        <div class="col-sm-4 offset-5">
                            <input type="file" name="post_image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="form-group row" align="center">
                        <div class="col-sm-12">
                            <button style="border-radius:5px;" type="submit" class="btn btn-primary">Post an Art Style</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@stop
@section('js')
<script>
  var app = new Vue({
    el: '#app',
    data: {
      message: 'hello vue js',
      warna: false,
      badan: false,
      warnaLatar: false,
    },
    computed: {
        hilang: function () {
          if (this.warna === false) return true
          else return false
        },
        hilang2: function () {
          if (this.badan === false) return true
          else return false
        },
        hilang3: function () {
          if (this.warnaLatar === false) return true
          else return false
        }
    }
  })
</script>
@stop