<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'img'
    ];

    public function carts()
    {
        return $this->belongsToMany(Book::class, 'carts')->withPivot('count', 'created_at', 'updated_at');
    }    
    
    public function purshasedbooks()
    {
        return $this->belongsToMany(Book::class, 'purshasedbooks')->withPivot('created_at', 'count');

    }    
    public function wishlist()
    {
        return $this->belongsToMany(Book::class, 'wishlists')->withPivot('created_at');

    }
    

    public function interests()
    {
        return $this->belongsToMany(Category::class, 'interests');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
