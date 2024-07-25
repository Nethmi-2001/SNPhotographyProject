<?php
// app/Models/Package.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['package_id', 'package_name'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
