<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsTo(book::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
