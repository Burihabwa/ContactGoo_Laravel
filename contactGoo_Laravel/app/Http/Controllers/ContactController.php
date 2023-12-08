<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index() {
		return view('index');
	}


	public function fetchAll() {
		$conts = Contact::all();
		$output = '';
		if ($conts->count() > 0) {

            foreach ($conts as $cont) {
                $output .=   '<div class="card mb-2 cont" >
                <div class="row g-0">
                <div class="col-md-2">
                    <center>
                    <img src="storage/images/'.$cont->profil.'" height="80px" style="border-radius: 50%;" width="80px" class="p-1" alt="...">
                    </center>
                    </div>
                <div class="col-md-10">
                    <div class="card-body">
                    <h5 class="card-title">'.$cont->nom.' '.$cont->prenom.'</h5>
                    <p class="card-text">'.$cont->tel.'</p>
                    </div>
                </div>
                </div>
            </div>';

            }


			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5"><h1 class="text-center text-secondary my-5">Aucun  contact present dans la base de donnée !</h1></h1>';
		}

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
