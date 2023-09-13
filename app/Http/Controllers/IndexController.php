<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Categorie;
class IndexController extends Controller
{
    public function index()
    {
        $produits = Produit::paginate(8);        
        $categ=Categorie::paginate(8);
        return view('layouts.welcome', compact('categ', 'produits'));
    }
  
  
}
