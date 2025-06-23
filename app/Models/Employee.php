<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    
    protected $fillable=[
        'name',
        'family',
        'phone',
        'address'
    ];

    public function loans() {
    return $this->hasMany(Loan::class);
    }
}
