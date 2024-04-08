<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educational extends Model
{
    use HasFactory;

    protected $fillable = [
        "schoolname",
        "year",
        "address",
        "description",
    ];
}
