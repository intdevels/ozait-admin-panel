<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $appends = [
        'starArray'
    ];

    protected $fillable = [
        'name',
        'position',
        'description',
        'stars',
        'image',
        'order'
    ];

    /**
     * @return array
     */
    public function getStarArrayAttribute(): array{
        $stars = (float)$this->stars;

        if($stars == 0){
            return ['star2','star2','star2','star2','star2'];
        }

        $starArray = [];
        for ($i = 0; $i < 5; $i++){
            $x = $stars - $i;

            if($x > 0 && $x < 1){
                $starArray[] = 'star3';
            }

            if($x >= 1){
                $starArray[] = 'star';
            }

            if($x < 0){
                $starArray[] = 'star2';
            }
        }

        return $starArray;
    }
}
