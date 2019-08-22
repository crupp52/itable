<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'table_id',
        'title',
        'description',
        'deadline',
        'location',
        'status'
    ];

    public function table()
    {
        return $this->belongsTo('\App\Models\Table', 'table_id', 'id', 'tables');
    }
}
