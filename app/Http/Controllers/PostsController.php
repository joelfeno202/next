<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\posts;
use App\Models\logo;
use App\Models\next_one;
use App\Models\produit;
use App\Models\actualite;
use App\Models\categorie;
use App\Models\commande;
use App\Models\shop;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile ;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use Validator;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(
            'welcome',
            'car',
            'produit',
            'voir_produitt',
            'contact',
            'contac',
            'service',
            'nextone',
            'somme',
            'reseau',
            'routeur',
            'voir_produit_routeur',
            'switch',
            'recher',
            'recherr',
            'achat',
            'up',
            'add_cart',
            'load_card',
            'actual','nos',
            'card','point','cablagec','autre','armoires','commande','commandes','supp_commande','voir-commande'
        );
    }

    public function nos()
    {

        return view('nos');
    }
    public function update_total(Request $re)
    {

        if (Auth::check()) {

            $qty = $re->vaeur;
            if (shop::where('id', $re->idd)->where('user_id', Auth::id())->exists()) {
                $maty = shop::where('commande', 0)->where('id', $re->idd)->where('user_id', Auth::id())->first();
                $maty->update(
                    [
                        'prod_qty' => $qty,

                    ]
                );
                $matys = shop::where('commande', 0)->where('user_id', Auth::id())->get();
                return response()->json(['status' => $matys]);
            } else {

                return response()->json(['status' => 'error']);
            }
        }
    }
    public function recher()
    {

        return view('recher');
    }
    public function user()
    {
          $users = User::where('usertype',0)->get();
        
        return view('user',compact('users'));
    }
    public function ajoutActual()
    {
        return view('AjoutACTUAL');
    }
    public function actual()
    {
        $actu = actualite::all();
        return view('adminActualite', compact('actu'));
    }
    public function load_card()
    {

        $count = shop::where('commande', 0)->where('user_id', Auth::id())->count();
        return response()->json(['count' => $count]);
    }
    public function  delete_card(Request $re)
    {

        if (Auth::check()) {
            $prod_id = $re->prod_id;

            if (shop::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                $produit = shop::findOrFail($prod_id);
                $produit->delete();
                return response()->json(['status' => "produit supprimer"]);
            }
            $produit = shop::findOrFail($prod_id);
            $produit->delete();
            $matys = shop::where('commande', 0)->where('user_id', Auth::id())->get();
            return response()->json(['status' => "produit supprimer", 'prix' => $matys]);
        } else {
            return response()->json(['status' => "Inscrivez vous pour continuer !"]);
        }
    }

    public function add_cart(request $re)
    {
        $product_id = $re->product_id;
        $product_qty = $re->product_qty;
        $product_prix = $re->product_prix;
        if (Auth::check()) {
            $prod_check = produit::where('id', $product_id)->first();
            if ($prod_check) {
                if (shop::where('commande', 0)->where('prod_id', $product_id)->exists()) {
                    return response()->json(['status' =>'<i class="far fa-times-circle"></i> '.' Déjà dans le pagnier!!']);
                } else {
                    shop::create([
                        'prod_id' => $product_id,
                        'user_id' => Auth::id(),
                        'prod_qty' => $product_qty,
                        'product_prix' => $product_prix

                    ]);
                    return response()->json(['status' =>''. $prod_check->nomProduit . ' Ajouter dans le pagnier']);
                }
            }
        } else {
            return response()->json(['status' => 'Inscrivez vous pour continuer !']);
        }
    }


    public function commande(request $request)
    {
        $image= $request->image;  
    $nom= $request->nom;
    $prenom= $request->prenom;
    $email = $request->email;
    $ville= $request->ville;
    $tel=$request->tel;
    $adresse= $request->adresse;
    $pays= $request->pays;
    $entreprise= $request->entreprise;
    $user_id= $request->user_id;

        if (Auth::check()) {
          $post =shop::where('commande',0)->update(['commande' => 1]); 
 
        
    
            commande::create([
                'image'=>$image,
                'nom' =>  $nom,
                'email' =>  $email,
                'ville' =>  $ville,
                'tel'=> $tel,
                'adresse'=>$adresse,
                'pays'=>   $pays,
                'prenom'=>  $prenom,
                'entreprise'=>  $entreprise,
                'user_id'=> $user_id,

            ]);
            return response()->json(['status' => '<p>Commande reussit </p><i class="fad fa-check"></i>']);
        } else {
            return response()->json(['status' => 'Inscrivez vous pour continuer !<i class="fad fa-do-not-enter"></i>']);
        }
    }

    public function supp_all(Request $req)
    {
        if($req->val=='1')
        {
            $produits = produit::where('id', $req->id)->update(['selectt' => 1]); 

            return response()->json(['status' => 'suprimer ']);
        }else{
            $produits = produit::where('id', $req->id)->update(['selectt' => 0]); 

            return response()->json(['status' => 'oui ']);
        }
      
    }
    public function supp_tous(Request $req)
    {
       


      $produits = produit::where('selectt',1)->count();
      if($produits<=0)
      {
        return response()->json(['status' => 'Aucun produit selectionner !']);
      }else{
        $produits = produit::where('selectt',1)->delete();
        return response()->json(['status' => 'Produit supprimer']);
      }

          
      
      
    }
    public function achat()
    {
        $produits = shop::where('commande', 0)->Where('user_id', Auth::id())->get();

        return view('achat', compact('produits'));
    }
    public function card()
    {
        $produits = shop::where('commande', 0)->Where('user_id', Auth::id())->get();
        return view('card', compact('produits'));
    }
    public function recherr(request $re)
    {
        $ref = produit::Where('categorie', 'like', '%' . $re->cont . '%')->orWhere('description', 'like', '%' . $re->cont . '%')->orWhere('nomProduit', 'like', '%' . $re->cont . '%')->get();
        return $ref;
    }
    public function contact()
    {
        return view('contact');
    }

    public function routeur()

    {
        $produits = produit::Where('categorie', 'routeur')->paginate(20);
        return view('reseau', compact('produits'));
    }
    public function switch()

    {
        $produits = produit::Where('categorie', 'switch')->paginate(20);
        return view('switch', compact('produits'));
    }
    public function point()

    {
        $produits = produit::Where('categorie',"Point d'accès wifi")->paginate(20);
        return view('point', compact('produits'));
    }
    public function cablagec()

    {
        $produits = produit::Where('categorie',"Câblage")->orWhere('categorie',"Câblage fibre optique")->orWhere('categorie',"Câblage Cuivre")->paginate(20);
        return view('cablagec', compact('produits'));
    }
    public function autre()

    {
        $produits = produit::Where('categorie','!=',"Armoires")->Where('categorie','!=',"routeur")->Where('categorie','!=',"switch")->Where('categorie','!=',"Câblage")->Where('categorie','!=',"Point_d_accès_wifi")->paginate(20);
        return view('autre', compact('produits'));
    }
    public function armoires()

    {
        $produits = produit::Where('categorie','accessoires')->orWhere('categorie',"Armoires")->paginate(20);
        return view('armoir', compact('produits'));
    }
    public function car()
    {
        $produits = produit::all();
      
        $adresses = next_one::orderBy('id')->paginate(20);
        $actu = actualite::all();
        $posts = posts::orderBy('id')->paginate(10);
        $logos = logo::orderBy('id')->paginate(10);
        return view('ACCUEIL1', compact('logos', 'posts', 'actu','adresses','produits'));
    }
    public function commandes()
    {
        
        $produits = commande::all();
    
        return view('commande', compact('produits'));
    }
    public function somme()
    {
        return view('qui_somme');
    }
    public function service()
    {
        return view('service_atous');
    }
    public function nextone()
    {
        $posts = posts::orderBy('id')->paginate(10);
        $logos = logo::orderBy('id')->paginate(10);
        $adresses = next_one::orderBy('id')->paginate(20);
        return view('nextone', compact('adresses', 'logos', 'posts'));
    }
    public function contac()
    {
        return view('Apropos');
    }
    public function welcome()
    {
        $produits = shop::all();
        $actu = actualite::all();
        $logos = logo::orderBy('id')->paginate(20);
        $posts = posts::orderBy('nom')->paginate(20);
        $adresses = next_one::orderBy('id')->paginate(20);

        return view('principal', compact('produits', 'posts', 'logos', 'adresses', 'actu'));
    }
    public function prod()
    {

        $produits = produit::orderBy('categorie')->get();
        return view('adminProduit', compact('produits'));
    }
    public function categori()
    {

        $categoris = categorie::orderBy('id')->paginate(20);
        return view('admincategori', compact('categoris'));
    }
    public function adresse()
    {
        $adresses = next_one::orderBy('id')->paginate(20);
        return view('adminAdress', compact('adresses'));
    }
    public function produit()
    {
        $produits = produit::orderBy('id')->paginate(20);
        return view('produits', compact('produits'));
    }

    public function index()
    {
        $posts = posts::orderBy('id')->paginate(10);
        return view('admin', compact('posts'));
    }
    public function logoAdmin()
    {
        $logos = logo::orderBy('id')->paginate(10);
        return view('logoAdmin', compact('logos'));
    }
    public function ajout()
    {
        return view('ajout_post');
    }
    public function ajout_produit()
    {
        return view('ajout_produit');
    }
    public function ajout_logog()
    {
        return view('ajoutlogo');
    }
    public function ajout_adresse()
    {
        return view('ajoutAdresse');
    }
    public function ajout_post(Request  $req)
    {
        $filname = time() . '.' . $req->image->extension();
        $image =  $req->image->storeAs(
            'image',
            $filname,
            'public'
        );
        $url = storage::url($image);
        posts::create([
            'nom' => $req->nom,
            'image' => $url,
            'val' => 'actif'
        ]);
        $mess = 'ajout avec sucsses';
        return back()->with('status','ajout avec success');
    }
    public function ajout_actual(Request  $req)
    {
        $filname = time() . '.' . $req->image->extension();
        $image =  $req->image->storeAs(
            'image',
            $filname,
            'public'
        );
        $url = storage::url($image);
        actualite::create([
            'titre' => $req->titre,
            'image' => $url,
            'description' => $req->des,
        ]);
        $mess = 'ajout avec sucsses';
        return back()->with('status','ajout avec success');
    }
    public function ajout_adresses(Request  $req)
    {

        $filname = time() . '.' . $req->image->extension();
        $image =  $req->image->storeAs(
            'image',
            $filname,
            'public'
        );
        $url = storage::url($image);
        next_one::create([
            'adresse' => $req->adresse,
            'image' => $url,
            'tel' => $req->tel,
            'mail' => $req->mail,
        ]);
        
        return back()->with('status','ajout avec success');
    }
    public function ajout_produits(Request  $req)
    {
      $mess= Validator::make( $req->all(),[
            'nomProduit' => 'required',
            'prix' => 'required|numeric',
            'description' => 'required|',
            'nombre'=>'required|numeric',
            'categorie'=> 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif',
           
        ]);
       if($mess->passes()){
        $filname = time() . '.' . $req->image->extension();
        $image =  $req->image->storeAs(
            'image',
            $filname,
            'public'
        );
        $url = storage::url($image);
        produit::create([
            'nomProduit' => $req->nomProduit,
            'image' => $url,
            'prix' => $req->prix,
            'nombre' => $req->nombre,
            'description' => $req->description,
            'categorie' => $req->categorie,

        ]);
        return response()->json([
            'message'=>'Ajout avec success',
            'contenu'=>'55',
           
        ]);
    }else{
        return response()->json([
            'message'=>$mess->errors()->all()
        ]);
    }
    }



    public function ajout_logop(Request  $req)
    {
        logo::create([
            'logo' => $req->logo,
            'slogon' => $req->slogon,
        ]);
        $mess = 'ajout avec sucsses';
        return back()->with('status','ajout avec success');
    }




    public function voir_actual($id)
    {
        $post = actualite::findOrFail($id);
        return view('voirActual', compact('post'));
    }

    public function voir_commande($id,$user_id)
    {
       
        $produit = commande::findOrFail($id);
        $date = $produit->updated_at;
        $entana = shop::where('updated_at',$date)->where('commande',1)->Where('user_id',$user_id)->get();
        
        return view('voir_commande', compact('produit','entana'));
    }
    public function voir_post($id)
    {
        $post = posts::findOrFail($id);
        return view('voir-post', compact('post'));
    }

    public function voir_categori($id)
    {
        $categorie = categorie::findOrFail($id);
        return view('voirCategori', compact('categorie'));
    }
    public function voir_produit($id)
    {

        $produit = produit::findOrFail($id);
        return view('voirProduit', compact('produit'));
    }
    public function voir_produit_routeur($id)
    {
        $produits = produit::orderBy('id')->paginate(10);
        $produit = produit::findOrFail($id);
        return view('voireRouteur', compact('produit'));
    }
    public function voir_adresse($id)
    {
        $adresse = next_one::findOrFail($id);
        return view('voirAdresse', compact('adresse'));
    }

    public function voir_logo($id)
    {
        $logo = logo::findOrFail($id);
        return view('logoVoir', compact('logo'));
    }
    public function supprimer_post($id)
    {


        $post = posts::findOrFail($id);
        $post->delete();
        return back()->with('status','Supprimer avec success');
    }
    public function supprimer_produit($id)
    {


        $produit = produit::findOrFail($id);
      
        $produit->delete();
        return back()->with('status','Supprimer avec success');
    }
  
    public function supp_commande($id,$user_id,$created_at)
    {


        $produit = commande::findOrFail($id);
        $produit->delete();
        $prod= shop::where('updated_at', $created_at)->where('commande', 1)->where('user_id',$user_id)->delete();
        
        return back()->with('status','Supprimer avec success');
    }
    public function suppactual($id)
    {
        $produit = actualite::findOrFail($id);
        $produit->delete();
        return back()->with('status','Supprimer avec success');
    }
    public function supprimer_logo($id)
    {


        $logo = logo::findOrFail($id);
        $logo->delete();
        return back()->with('status','Supprimer avec success');
    }
    public function supprimer_adresse($id)
    {


        $logo = next_one::findOrFail($id);
        $logo->delete();
        return back()->with('status','Supprimer avec success');
    }
    public function update_post($id)
    {
        $post = posts::findOrFail($id);
        return view('update', compact('post'));
    }
    public function updateactual($id)
    {
        $post = actualite::findOrFail($id);
        return view('editActualite', compact('post'));
    }
    public function update_produit($id)
    {
        $produit = produit::findOrFail($id);
        return view('update_produit', compact('produit'));
    }
    public function update_adresse($id)
    {
        $adresse = next_one::findOrFail($id);
        return view('adresseUpdate', compact('adresse'));
    }
    public function update_logo($id)
    {
        $logo = logo::findOrFail($id);
        return view('logoEdit', compact('logo'));
    }

    public function updat_post($id, Request $req)
    {
        $filname = time() . '.' . $req->image->extension();
        $post = posts::findOrFail($id);
        $image =  $req->image->storeAs(
            'image',
            $filname,
            'public'
        );
        $url = storage::url($image);
        $post->update(
            [
                'nom' => $req->nom,
                'image' => $url
            ]
        );
        $post = posts::findOrFail($id);
        return back()->with('status','Mise à jour  avec success');
    }
    public function updataactual($id, Request $req)
    {
        $filname = time() . '.' . $req->image->extension();
        $post = actualite::findOrFail($id);
        $image =  $req->image->storeAs(
            'image',
            $filname,
            'public'
        );
        $url = storage::url($image);
        $post->update(
            [
                'description' => $req->description,
                'titre' => $req->titre,
                'image' => $url
            ]
        );
        $post = actualite::findOrFail($id);
        return back()->with('status','Mise à jour  avec success');
    }
    //uuuuuuuuuu
    public function up($id)
    {
        $produit = produit::findOrFail($id);
        $produit->update(
            [
                'vu' => '1',
            ]
        );
        return back();
    }


    public function updat_produit($id, Request $req)
    {
        $filname = time() . '.' . $req->image->extension();
        $produit = produit::findOrFail($id);
        $image =  $req->image->storeAs(
            'image',
            $filname,
            'public'
        );
        $url = storage::url($image);
        $produit->update(
            [
                'nomProduit' => $req->nomProduit,
                'prix' => $req->prix,
                'nombre' => $req->nombre,
                'description' => $req->description,
                'image' => $url,   'categorie' => $req->categorie,
            ]
        );
        $produit = produit::findOrFail($id);
        return back()->with('status','Mise à jour  avec success');
    }
    public function updat_adresse($id, Request $req)
    {
        $filname = time() . '.' . $req->image->extension();
        $post = next_one::findOrFail($id);
        $image =  $req->image->storeAs(
            'image',
            $filname,
            'public'
        );
        $url = storage::url($image);
        $post->update(
            [
                'adresse' => $req->adresse,
                'tel' => $req->tel,
                'mail' => $req->mail,
                'image' => $url
            ]
        );

        return back()->with('status','Mise à jour  avec success');
    }

    public function updat_logop($id, Request $req)
    {

        $logo = logo::findOrFail($id);


        $logo->update(
            [
                'logo' => $req->logo,
                'slogon' => $req->slogon
            ]
        );

        return back()->with('status','Mise à jour  avec success');
    }
    public function ser_post(Request $req)
    { {
            $posts = posts::where('nom', 'like', '%' . $req->ser . '%')->paginate(2);
            return view('accueil', compact('posts'));
        }
    }
    public function selected_post($id)
    {

        $post = posts::findOrFail($id);
        $po = $post->val;

        if ($po == 'actif') {
            $val = 'selectionner X';
        } else {
            $val = 'actif';
        }
        $post->update(
            [
                'val' => $val
            ]
        );
        return back();
    }
    public function suppall_post()
    {
        $post = posts::where('val', '=', 'selectionner X');
        $post->delete();
        return back();
    }
}