<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class About extends Model
{
    use HasFactory;

    protected $table = "abouts";

    protected $fillable = [
        'name',
        'birthdate',
        'address',
        'zipcode',
        'email',
        'phone'
    ];
    public function age()
    {
    return Carbon::parse($this->attributes['birthdate'])->age;
    }
}
