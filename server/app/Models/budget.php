<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budget extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'budget',
        'category',
        'status',
    ];

}
