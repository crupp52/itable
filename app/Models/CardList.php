<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardList extends Model
{
    protected $fillable = [
        'card_id',
        'title',
        'description',
        'status'
    ];

    public function card(){
        return $this->belongsTo('\App\Models\Card', 'card_id', 'id', 'cards');
    }
}
