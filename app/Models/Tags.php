<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    protected $fillable = [
        'name',
    ];

}
