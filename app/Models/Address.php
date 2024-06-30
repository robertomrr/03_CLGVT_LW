<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'street',
        'city',
        'state',
        'country',
        'zipcode',
    ];   
    
    // Exemplo de relacionamento com User
    public function user()
    {
        return $this->belongsTo(User::class);
    }    
}
