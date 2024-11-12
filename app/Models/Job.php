<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Employer_id' => 'integer',
        'employer_id' => 'integer',
    ];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
