<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titel extends Model
{
    use HasFactory;
    protected $table = 'titels';
    protected $fillable = ['titel', 'genres'];
    protected $casts = [
        'genres' => 'array'
    ];

    public function films()
    {
        return $this->hasMany(Film::class);

    }
}
