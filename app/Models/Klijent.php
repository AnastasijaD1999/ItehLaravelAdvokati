<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Advokat;

class Klijent extends Model
{
    use HasFactory;

    public function advokat()
    {
        return $this->belongsTo(Advokat::class);
    }
}
