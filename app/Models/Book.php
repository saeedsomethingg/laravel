<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=[
        'name',
        'genre',
        'writer',
        'available'
    ];

    public function loans() {
    return $this->hasMany(Loan::class);
    }
}
