<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function selectItem($item){


           $contatct = Contact::where(function($query) use($item){

            if($item){
                $query->where('nom', 'like','%'.$item.'%')
                ->orWhere('prenom', 'like','%'.$item.'%')
                ->orWhere('tel', 'like','%'.$item.'%');

            }

           })->get();


        return  response()->json( $contatct , 200) ;
    }

    public function index() {
		return view('index');
	}


	public function fetchAll() {
		$conts = Contact::all();
		return  response()->json( $conts , 200) ;


	}

    public function store(Request $request) {
		$file = $request->file('profil');
		$profil = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/images', $profil);

		$conta = ['nom' => $request->nom, 'prenom' => $request->prenom, 'email' => $request->email, 'tel' => $request->tel, 'description' => $request->description,'entreprise' => $request->entreprise, 'profil' => $profil];
		Contact::create($conta);
		return back()->withInput();
	}



}
