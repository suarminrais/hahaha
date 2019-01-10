<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Artstyle;
use App\Category;
use App\ArtBasic;
use App\ArtUp;
use App\subject;
use App\Image;
use App\Bg;
use Images;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
        ]);

        $post = new Post;

        $post->nama = $request->nama;
        $post->harga = $request->harga;
        $post->art_id = $request->art_id;

        $post->deskripsi = $request->deskripsi;
        $post->tools = $request->tools;
        $post->devday = $request->devday;
        $post->by = $request->by;

        if ($request->hasFile('post_image')) {
          $image = $request->file('post_image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Images::make($image)->resize(800, 600)->save($location);

          $post->post_image = $filename;
        }
        $post->extra_1 = $request->extra_1;
        $post->extra_2 = $request->extra_2;
        $post->extra_3 = $request->extra_3;
        $post->extra_4 = $request->extra_4;
        $post->extra_5 = $request->extra_5;
        $post->save();
        $post->categories()->sync($request->categories, false);
        $post->artbasics()->sync($request->artbasics, false);
        $post->artups()->sync($request->artups, false);
        $post->subs()->sync($request->subs, false);
        $post->image()->sync($request->comps, false);
        $post->bg()->sync($request->bg, false);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Post::find($id);
        $tags = Artstyle::all();
        $categories = Category::all();
        $basis = ArtBasic::all();
        $up = ArtUp::all();
        $sub = subject::all();
        $comp = Image::all();
        $bg = Bg::all();
        return view('artis.editPost')->withData($data)->withTags($tags)->withCategories($categories)->withBasic($basis)->withUp($up)->withSu($sub)->withComp($comp)->withBg($bg);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->nama = $request->nama;
        $post->harga = $request->harga;
        $post->art_id = $request->art_id;

        $post->deskripsi = $request->deskripsi;
        $post->tools = $request->tools;
        $post->devday = $request->devday;

        if ($request->hasFile('post_image')) {
          $image = $request->file('post_image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Images::make($image)->resize(800, 600)->save($location);

          $post->post_image = $filename;
        }
        $post->extra_1 = $request->extra_1;
        $post->extra_2 = $request->extra_2;
        $post->extra_3 = $request->extra_3;
        $post->extra_4 = $request->extra_4;
        $post->extra_5 = $request->extra_5;

        $post->save();
        $post->categories()->sync($request->categories, false);
        $post->artbasics()->sync($request->artbasics, false);
        $post->artups()->sync($request->artups, false);
        $post->subs()->sync($request->subs, false);
        $post->image()->sync($request->comps, false);
        $post->bg()->sync($request->bg, false);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Post::find($id);
        $data->categories()->detach();
        $data->artbasics()->detach();
        $data->artups()->detach();
        $data->subs()->detach();
        $data->image()->detach();
        $data->bg()->detach();
        $data->delete(); 

        return redirect()->route('home');
    }
}
