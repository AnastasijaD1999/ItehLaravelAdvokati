<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Advokat;

class AdvokatskaKancelarija extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'adresa',
        'email',
        'website'
    ];


    public function advokati()
    {
        return $this->hasMany(Advokat::class);
    }
}
