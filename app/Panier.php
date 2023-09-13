<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    
   protected $table = 'paniers';
protected $fillable = [
   'produit_id', 'user_id', 'qte',
];
public function user(){ return $this->belongsTo('App\User'); }

}