<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Import the soft delete trait

class Camps extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['title', 'price'];
}
