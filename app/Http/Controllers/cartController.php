<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\cart;
use Auth;
use  DB;
use App\produitcart;
use App\Panier;
use App\Command;
class cartController extends Controller
{
    public function addcmd($total)
    {
        $cmd=new Command;
        $cmd->total=$total;
        $cmd->save();
       
        DB::table('paniers')->where('commande_id',null)->update(['commande_id'=>$cmd->id]);
        return back()->withInput();
    }
    public function allpanier()
    {
        $paniers=Panier::whereuser_id(Auth::user()->id)->where('commande_id',null)->get();
    return view('layouts.cart')->with('paniers',$paniers);
    }
    public function store(Request $request){
        dd($request->id,$request->name,$request->prix);
        //cart::add($request->id);
    }
    public function panier(Request $request, $id){

        
          $panier=new Panier;
           $panier->produit_id=$id;
           $panier->user_id=Auth::user()->id;
           $panier->qte=$request->input('qte');
           $panier->save();
           return back()->withInput();
           
           

    }
    public function delete($id){
        $pro=Panier::find($id);
        if($pro)
        {
            $pro->delete();
            session()->flash('success','supprimer');
        }
        return back()->withInput();
    }


}
