<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','address'];

    public function entries()
    {
        return $this->hasMany(Entry::class);
    }
}
