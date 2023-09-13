<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $table = 'commandes';
    protected $fillable = [
     'total',
    ];
    public function user(){ return $this->belongsTo('App\User'); }

}
