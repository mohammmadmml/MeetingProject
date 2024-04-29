<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'job_explanation',
        'presentation_date',
        'tags'
    ];
    
    public function regions()
    {
        return $this->belongsToMany(Meeting::class);
    }
}
