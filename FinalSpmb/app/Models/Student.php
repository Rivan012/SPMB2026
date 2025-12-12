<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'user_id',
        'major_id',
        'nisn',
        'full_name',
        'birth_place',
        'birth_date',
        'gender',
        'religion',
        'address',
        'phone_number',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
