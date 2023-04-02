<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'image',
        'button_text',
    ];

    public function texts()
    {
        return $this->hasMany(TypingText::class)->orderBy('order');
    }
}
