<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function user() // Corrected visibility keyword to 'public'
    {
        return $this->belongsTo(User::class);
    }
    public function jobs(){
        return $this->hasmany(Job::class);
    } // Corrected visibility keyword to 'public'
}

