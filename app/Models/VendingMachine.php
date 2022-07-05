<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendingMachine extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'serial',
        'vending_machine_category_id',
    ];
}
