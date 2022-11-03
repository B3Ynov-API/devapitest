<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'birthday'
    ];

    public function specy()
    {
        return $this->belongsTo(Specy::class);
    }

    Public function enclosures()
    {
        return $this->belongsToMany(Enclosure::class);
    }

}
