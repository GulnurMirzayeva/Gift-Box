<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPremadeBoxItem extends Model
{
    protected $fillable = [
        'user_card_for_premade_box_id',
        'insiding_id',
        'selected_variant',
        'custom_text',
        'uploaded_image'
    ];

    public function userCardForPremadeBox()
    {
        return $this->belongsTo(UserCardForPremadeBox::class);
    }

    public function insiding()
    {
        return $this->belongsTo(Insiding::class);
    }
}
