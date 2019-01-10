<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Artstyle;
use App\Category;
use App\ArtBasic;
use App\ArtUp;
use App\subject;
use App\Bg;
use App\Image;
use App\User;
use App\Order;
use App\Message;
use App\Buyer;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
            $data = Post::orderBy('id', 'desc')->where('by', Auth::user()->name)->paginate(5);
            return view('artis.home')->withData($data);
    }

    public function post()
    {
        $tags = Artstyle::all();
        $categories = Category::all();
        $basis = ArtBasic::all();
        $up = ArtUp::all();
        $sub = subject::all();
        $comp = Image::all();
        $bg = Bg::all();

        return view('artis.post')->withTags($tags)->withCategories($categories)->withBasic($basis)->withUp($up)->withSu($sub)->withComp($comp)->withBg($bg);
    }

    public function pay()
    {
        $set = Order::orderBy('id','desc')->where('by', Auth::user()->name)->get();
        $user = User::all();
        $data = Post::all();
        $total = 0;

        foreach ($set as $s) {
            foreach ($data as $d) {
                if ($d->id==$s->post_id) {
                $total = $s->where([['status','berhasil'],['by', Auth::user()->name]])->sum('total');
                }
            }
        }

        return view('artis.pay')->withSet($set)->withData($data)->withUser($user)->withTotal($total);
    }

    public function rate()
    {
        $set = Order::orderBy('id','desc')->where('by', Auth::user()->name)->get();
        $data = Post::all();

        return view('artis.rate')->withSet($set)->withData($data);
    }

    public function profile()
    {
        return view('artis.profile');
    }

    public function profileanu(Request $req, $id)
    {
        $data = User::find($id);
        $data->name = $req->name;
        $data->about = $req->about;
        $data->rekening = $req->rekening;
        $data->lokasi = $req->lokasi;
        $data->save();
        Session::flash('success', 'Berhasil Update Profil Kamu!');
        return redirect()->route('artis.profile');
    }

    public function message()
    {
        $data = Message::where('user_id', Auth::user()->id)->orderBy('id','desc')->get();
        
        return view('pesan.message')->withData($data); 
    }

    public function messageDet($id)
    {
        $data = Message::where('user_id', Auth::user()->id)->get();
        $set = Message::where([['user_id', Auth::user()->id],['buyer_id', $id]])->get();

        return view('pesan.data')->withData($data)->withSet($set)->withId($id); 
    }
    public function pesanPost(Request $req)
    {
        $set = User::find($req->user);
        $lok = Buyer::find($req->buyer);

        $data = new Message;
        $data->user_id = $req->user;
        $data->buyer_id = $req->buyer;
        $data->nama_buyer = $req->nama_buyer;
        $data->nama_user = $req->nama;
        $data->reply = $req->pesan;
        $data->user()->associate($set);
        $data->buyer()->associate($lok);
        $data->save();
        Session::flash('success', 'Berhasil Kirim Pesan!');
        
        return redirect()->back();
    }
    public function tolak(Request $req, $id)
    {
        $data = Order::find($id);
        $data->status = $req->status;
        $data->save();
        Session::flash('success', 'Berhasil Bro!!');
        return redirect()->back();
    }
}
