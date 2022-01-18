<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    const MARITAL_STATUS = [
        1 => 'Solteiro',
        2 => 'Casado', 
        3 => 'Divorciado'
    ]; 

    protected $fillable = [
        'name',
        'document_number',
        'email',
        'phone',
        'defaulter',        
        'date_birth',
        'sex',
        'marital_status',
        'physical_desability'
    ];
}
