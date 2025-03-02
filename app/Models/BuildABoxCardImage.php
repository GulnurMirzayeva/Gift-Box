<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildABoxCardImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_card_id', 'card_id', 'image', 'order'
    ];

    // İlişkili modellər
    public function userCard()
    {
        return $this->belongsTo(UserCardForBuildABox::class);
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
