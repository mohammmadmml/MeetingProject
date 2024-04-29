<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic',
        'explain',
        'date',
        'start',
        'end',
        'location',
        'tags'
        
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
