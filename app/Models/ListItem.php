<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    protected $fillable = [
        'list_id',
        'title',
        'description'
    ];

    public function cardList(){
        return $this->belongsTo('\App\Models\CardList', 'list_id', 'id', 'card_lists');
    }
}
