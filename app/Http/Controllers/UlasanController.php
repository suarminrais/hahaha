<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ulasan;
use App\Post;
use Session;

class UlasanController extends Controller
{
    public function __construct()
    {
        $this->middleware('buyer.auth:buyer');
    }

    public function rate(Request $request, $post_id)
    {
        $post = Post::find($post_id);

        $data = new Ulasan();
        $data->name = $request->name;
        $data->bintang = $request->bintang;
        $data->ulasan = $request->ulasan;
        $data->post()->associate($post);
        $data->save();

        Session::flash('success', 'Berhasil memberi rating&ulasan..');

        return redirect()->back();
    }
}
