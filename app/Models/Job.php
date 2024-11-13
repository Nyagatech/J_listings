<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;
  protected $fillable = [
   'Employer_id',
        'title',
        'description',
        'salary',
        'job_type',
        'location',
        'company',
        'url',
        'employer_id',   
  ];
    
    protected $casts = [
        'id' => 'integer',
        'employer_id' => 'integer',
    ];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}

