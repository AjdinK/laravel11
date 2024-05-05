<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'company', 'email', 'tags', 'description', 'location', 'website',];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['tags'])) {
            $query->where('tags', 'like', '%' . request('tags') . '%');
        }

        if (isset($filters['search'])) {
            $query
                ->where('tags', 'like', '%' . request('search') . '%')
                ->orWhere('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
