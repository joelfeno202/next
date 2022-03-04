<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\testmail;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function envoimail(Request $req)
    {
        $mail = 'joelraveloson3@gmail.com';
        $user = ['nom' => $req->nom, 'sujet' => $req->sujet, 'message' => $req->message, 'mail' => $req->email];
        Mail::to($mail)->send(new testmail($user));
        return  back()->with('satus', 'e-mail envoyer');
    }
}