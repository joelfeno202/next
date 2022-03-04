<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\File\UploadedFile ;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'ville' => 'required|string|max:255',
            'tel'=>'required|string|max:255',
            'adresse'=>'required|string|max:255',
            'pays'=> 'required|string|max:255',
           'image'=>'required',
            'prenom'=> 'required|string|max:255',
        ]);


      
        $user = new User();
  
        $file = $request->file('image');

        $ext = $file->getClientOriginalExtension();
           $filname = time() . '.' .$ext;
           $image =  $request->image->storeAs(
            'image',
            $filname,
            'public'
        );
        $url = storage::url($image);
        
         $user->image =$url;

   
    $user->name= $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->ville= $request->ville;
    $user->tel=$request->tel;
    $user->adresse= $request->adresse;
    $user->pays= $request->pays;
   
    $user->prenom= $request->prenom;
        $user->save();
   
        event(new Registered($user));

        Auth::login($user);
     
 
       
      
    return redirect(RouteServiceProvider::HOME);
     
      
    }
}