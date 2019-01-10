<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Post;
use App\User;
use Images;
use Session;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('buyer.auth:buyer');
    }

    public function proses(Request $req)
    {
    	$new = new Order;
    	$new->customer_id = $req->buyer;
    	$new->post_id = $req->post;
    	$new->total = $req->total;
    	$new->by = $req->nama;
    	$new->pic = $req->pic;
    	$new->save();

    	return redirect()->route('order.data',$new->id);
    }

    public function order($id)
    {
    	$data = Order::find($id);
    	$data2 = Post::where('id', $data->post_id)->first();
    	$post = User::where('name', $data2->by)->first();

    	return view('order.upload')->withData($data)->withPost($post);
    }

    public function update(Request $req, $id)
    {
    	$data = Order::find($id);
    	$data->orientasi = $req->gambar;
    	$data->instruksi = $req->instruksi;
    	if ($req->hasFile('upload')) {
          $image = $req->file('upload');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Images::make($image)->resize(800, 600)->save($location);
          $data->gambar = $filename;;
        }
    	$data->save();

    	return redirect()->route('bayar',$id);
    }

    public function bayar($id)
    {
    	$post = Order::find($id);
        $data = Post::where('id', $post->post_id)->first();

    	return view('order.bayar')->withData($data)->withPost($post);
    }

    public function bayarful(Request $req, $id)
    {
    	$data = Order::find($id);
    	$data->total = $req->total;
    	$data->save();

    	return view('order.bank')->withTotal($data->total);
    }
    public function updat(Request $req, $id)
    {
        $data = Order::find($id);
        $data->status = $req->status;
        $data->save();
        Session::flash('success', 'Berhasil Membatalkan Pesanan kamu');
        return redirect()->back();
    }
}
