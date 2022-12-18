<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stuckorder extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'book_id', 'count', 'state'];

}
