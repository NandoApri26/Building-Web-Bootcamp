<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Import the soft delete trait
use Illuminate\Support\Facades\Auth;

use App\Models\Checkout;

class Camp extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'title',
        'price'
    ];

    public function getIsRegisteredAttribute()
    {
        if (!Auth::check()) {
            return false;
        }

        return Checkout::where('user_id', Auth::id())
            ->where('camp_id', $this->id)
            ->exists();
    }
}
