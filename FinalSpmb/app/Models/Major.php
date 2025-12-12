<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'majors';

    protected $fillable = [
        'name',
        'code',
        'quota',
    ];
    public function students()
    {
        return $this->hasMany(Student::class, 'major_id', 'id');
    }
}
