<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;
use App\Models\Galery;
use App\Models\Feedback;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth' , 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $ip = $request->ip();
        $currentUserInfo = \Location::get($ip);
        return view('index', compact('currentUserInfo', 'ip'));
    }

    public function weather()
    {
        return view('check-weather');
    }

    public function galery()
    {
        $galery = Galery::all()->where('user_id', Auth::user()->id);
        return view('gallery-filter', compact('galery'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('page-user-edit', compact('user'));
    }

    public function storeProfile(Request $request)
    {
        $user = Auth::user();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->location = $request->location;
        $user->about = $request->about;
        $user->save();
        return redirect()->back();
    }

    public function uploadImage()
    {
        return view('component-file-upload');
    }

    public function storeImage(Request $request)
    {
        $user = Auth::user();
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $imagePath = $request->foto->extension();

        $file = $request->file('foto')->move(public_path('profile_image'), $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath);

        $final = $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath;
        $user->image = $final;
        $user->save();
        return redirect()->route('profile');
    }

    public function uploadGalery()
    {
        return view('upload-galery');
    }

    public function storeGalery(Request $request)
    {
        $user = Auth::user();
        $galery = new Galery();
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $imagePath = $request->foto->extension();

        if($request->option == "photos"){
            $kategori = 'gallery-3';
            $kode = 3;
            $file = $request->file('foto')->move(public_path('images/Gallery/Photos'), $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath);

            $final = $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath;

            $galery->user_id = $user->id;
            $galery->path= "Photos/".$final;
            $galery->kategori = $kategori;
            $galery->kode = $kode;
            $galery->tittle = $request->tittle;
            $galery->save();

            return redirect()->route('galery');
        }else if($request->option == "selfie"){
            $kategori = 'gallery-2';
            $kode = 2;
            $file = $request->file('foto')->move(public_path('images/Gallery/Selfies'), $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath);

            $final = $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath;
            $galery->user_id = $user->id;
            $galery->path= "Selfies/".$final;
            $galery->kategori = $kategori;
            $galery->kode = $kode;
            $galery->tittle = $request->tittle;
            $galery->save();

            return redirect()->route('galery');
        }
        
        
    }

    public function storeFeedback(Request $request)
    {
        $feedback = new Feedback();
        $feedback->user_id = Auth::user()->id;
        $feedback->email = Auth::user()->email;
        $feedback->message = $request->message;
        $feedback->save();
        return redirect()->back();
    }

    public function admin()
    {
        $feedback = Feedback::all();
        $user = User::all();
        return view('admin', compact('feedback', 'user'));
    }

    public function discuss()
    {
        return view('discuss');
    }

    public function contact()
    {
        return view('page-contact');
    }

}
