<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\logo;
use App\Models\posts;
use App\Models\next_one;
use App\Models\actualite;

class PostsControlle extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype === '0') {
            $actu = actualite::all();
            $logos = logo::orderBy('id')->paginate(20);
            $posts = posts::orderBy('nom')->paginate(20);
            $adresses = next_one::orderBy('id')->paginate(20);
            return View('principal', compact('posts', 'logos', 'adresses','actu'));
        } else {
            $adresses = next_one::orderBy('id')->paginate(20);
            return View('dashboard',compact('adresses'));
        }
    }
}