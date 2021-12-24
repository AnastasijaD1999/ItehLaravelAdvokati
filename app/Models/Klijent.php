<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Advokat;

class Klijent extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'email',
        'advokat_id'
    ];

    public function advokat()
    {
        return $this->belongsTo(Advokat::class);
    }
}
