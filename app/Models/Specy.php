<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specy extends Model
{
    use HasFactory;

    public function animal()
    {
        return $this->hasMany(animal::class);
    }
}
