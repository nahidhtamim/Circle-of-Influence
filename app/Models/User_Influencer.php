<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Influencer extends Model
{
    use HasFactory;

    protected $table = 'user_influencers';

    protected $fillable = [
        'user_id',
        'type_id',
        'influencer_id',
        'influencer_note',
        'selection_influencer_id',
        'influencer_no',
    ];

    public function user_inf()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function influencer()
    {
        return $this->belongsTo(User::class,'influencer_id','id');
    }
}
