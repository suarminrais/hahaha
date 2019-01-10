<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Post;
use App\Buyer;
use App\User;
use App\Message;
use Session;
use Auth;

class BuyerController extends Controller
{
    public function __construct()
    {
        $this->middleware('buyer.auth:buyer');
    }

	public function bayar($id)
    {
        $data = Order::where('customer_id', $id)->orderBy('id', 'desc')->paginate(5);
        $set = Post::All();

        return view('cus.bayar')->withData($data)->withSet($set);
    }

    public function rating($id)
    {
        $data = Order::where('status', 'berhasil')->orderBy('id', 'desc')->paginate(5);
        $set = Post::All();

        return view('cus.rating')->withData($data)->withSet($set);
    }

    public function profile($id)
    {
    	$data = Buyer::find($id);
        return view('cus.profil')->withData($data);
    } 

    public function profileanu(Request $req, $id)
    {
        $data = Buyer::find($id);
        $data->name = $req->name;
        $data->about = $req->about;
        $data->rekening = $req->rekening;
        $data->lokasi = $req->lokasi;
        $data->save();
        Session::flash('success', 'Berhasil Update Profil Kamu!');
        return redirect()->route('buyer.profile',$id);
    }  

    public function pesan($by)
    {
        $data = User::where('name',$by)->first();
        return view('pesan.pesan')->withData($data);
    }

    public function pesanPost(Request $req)
    {
        $set = User::find($req->user);
        $lok = Buyer::find($req->buyer);

        $data = new Message;
        $data->user_id = $req->user;
        $data->buyer_id = $req->buyer;
        $data->nama_buyer = $req->nama_buyer;
        $data->pesan = $req->pesan;
        $data->user()->associate($set);
        $data->buyer()->associate($lok);
        $data->save();
        Session::flash('success', 'Berhasil Kirim Pesan!');
        
        return redirect()->back();
    }

    public function message()
    {
        $data = Message::where('buyer_id', Auth::guard('buyer')->user()->id)->orderBy('id','desc')->get();
        
        return view('pesan.reply')->withData($data); 
    }
    public function messageDet($id)
    {
        $data = Message::where('buyer_id', Auth::guard('buyer')->user()->id)->get();
        $set = Message::where([['buyer_id', Auth::guard('buyer')->user()->id],['user_id', $id]])->get();

        return view('pesan.dat')->withData($data)->withSet($set)->withId($id); 
    }
}
