<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'adress',
        'charge',
        'status',
        
    ];
    function user(){
        return $this->belongsTo(User::class);

    }
    function reservations(){
        return $this->hasMany(Reservation::class);
    }
    function images(){
        return $this->hasMany(Image::class);
    }
    
}
