<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdvokatskaKancelarija;
use App\Models\Klijent;

class Advokat extends Model
{
    use HasFactory;

    public function kancelarija()
    {
        return $this->belongsTo(AdvokatskaKancelarija::class);
    }

    public function klijenti()
    {
        return $this->hasMany(Klijent::class);
    }
}
