<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{

    use HasFactory;

    public $timestamps = false;
        
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number'
    ];

    public function user()
    {
        return $this->belongsTo(
            UserDetail::class
        ); 
    }
    
    public function country()
    {
        return $this->hasOne(
            Country::class,
            'id',
            'citizenship_country_id'
        );
    }
}
