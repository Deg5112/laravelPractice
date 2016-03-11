<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['body'];
    //relationship for Notes->
    public function card(){
        return $this->belongsTo(Card::class);
    }
}
