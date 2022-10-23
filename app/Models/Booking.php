<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {

        if ($filters['search'] ?? false) {
            $query->where('touristname', 'like', '%' . request('search') . '%')
                ->orWhere('email', 'like', '%' . request('search') . '%')
                ->orWhere('price', 'like', '%' . request('search') . '%')
                ->orWhere('fname', 'like', '%' . request('search') . '%')
                ->orWhere('lname', 'like', '%' . request('search') . '%');
        }
    }
}