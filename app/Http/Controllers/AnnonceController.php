<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;

class AnnonceController extends Controller
{
    public function list() {
    	$annonces = Annonce::all();

    	return view("annonce.list", ['annonces' => $annonces]);
    }


    public function add(Request $request) {
    	$annonce = new Annonce;


    	$data = request()->validate([
    		'annonce' => 'required',
    		'description'=> 'required',

    	]);
    	
    	$image = $request->file('picture');
 		
    	$imageName = time() . '.' . $image->getClientOriginalExtension();
    	 dd(request()->picture->move(public_path('storage'), $imageName));


    	// dd($imageName);
    	$annonce->name_annonce = request('annonce');
    	$annonce->description = request('description');
    	$annonce->image = $imageName;
    
    	$annonce->save();
    	


    	return back();





    }
}