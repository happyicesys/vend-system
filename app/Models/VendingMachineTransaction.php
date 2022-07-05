<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendingMachineTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'original',
    ];

    protected $casts = [
        'original' => 'json'
    ];
}
