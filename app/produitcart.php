<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produitcart extends Model
{
    protected $table = 'paniers';
    protected $fillable = [
        'produit_id', 'user_id','qte',
    ];
    public function user(){ return $this->belongsTo('App\User'); }
    public function produit (){ return $this->belongsTo('App\produit'); }
}
