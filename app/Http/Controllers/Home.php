<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Order;

class Home extends Controller
{
    public function profil($name)
    {
        $data = User::where('name', $name)->first();
        $basis = Post::orderBy('id','desc')->where('by', $data->name)->get();
        return view('artis.profil')->withData($data)->withBasis($basis);
    }

    public function index()
    {
    	$data = Post::orderBy('id', 'desc')->paginate(20);
    	return view('welcome')->withData($data);
    }
    public function show($id)
    {
    	$data = Post::find($id);
        $user = User::where('name', $data->by)->first();
    	return view('detail')->withData($data)->withUser($user);
    }
    public function updat($id)
    {
        $data = Order::find($id);

        return view('vendor.multiauth.admin.kirim')->withData($data);
    }
    public function update(Request $req, $id)
    {
        $data = Order::find($id);
        $data->status = $req->status;
        $data->save();

        return redirect()->route('home.updat',$id);
    }
}
