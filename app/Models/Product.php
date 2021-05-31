<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','details','rate', 'stock'];
    
    public function entries()
    {
        return $this->hasMany(Entry::class);
    }
}
