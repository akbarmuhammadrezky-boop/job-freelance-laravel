<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'title', 
        'company', 
        'location', 
        'category', 
        'job_type', 
        'salary', 
        'description',
        'user_id'
    ];

    // Relasi ke User (Pembuat Loker)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}