<?php

// app/Models/Photographer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'bio', 'website'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

