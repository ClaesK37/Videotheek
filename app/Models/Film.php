<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $attributes = [
        'aanwezig' => true,
    ];
    
    protected $fillable = ['nummer','titel_id'];
    public function titel()
    {
        return $this->belongsTo(Titel::class);

    }
}
