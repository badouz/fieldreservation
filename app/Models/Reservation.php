<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
     /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'field_id',
        'started_date',
        'end_date',
        'status',
        'price',
        'validation_date',
    ];
    function user(){
        return $this->belongsTo(User::class);

    }
    function field(){
        return $this->belongsTo(Field::class);

    }

    
}
