<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
     'description',
      'author',
       'category',
        'noPages',
         'price',
          'img',
           'state',
            'cdn'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function rating()
    {
        return $this->belongsTo(Category::class);
    }
    public function purshased()
    {
        return $this->belongsToMany(Book::class, 'purshasedbooks')->withPivot('count');
    }




}

