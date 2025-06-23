<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['member_id', 'book_id', 'employee_id'];

    public function member() {
        return $this->belongsTo(Member::class);
    }

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}