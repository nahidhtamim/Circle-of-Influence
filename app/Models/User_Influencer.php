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
        'first_per_influencer',
        'first_per_influencer_note',
        'second_per_influencer',
        'second_per_influencer_note',
        'third_per_influencer',
        'third_per_influencer_note',
        'first_pro_influencer',
        'first_pro_influencer_note',
        'second_pro_influencer',
        'second_pro_influencer_note',
        'third_pro_influencer',
        'third_pro_influencer_note',
    ];

    public function user_inf()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function first_per_inf()
    {
        return $this->belongsTo(User::class,'first_per_influencer','id');
    }

    public function second_per_inf()
    {
        return $this->belongsTo(User::class,'second_per_influencer','id');
    }

    public function third_per_inf()
    {
        return $this->belongsTo(User::class,'third_per_influencer','id');
    }

    public function first_pro_inf()
    {
        return $this->belongsTo(User::class,'first_pro_influencer','id');
    }

    public function second_pro_inf()
    {
        return $this->belongsTo(User::class,'second_pro_influencer','id');
    }

    public function third_pro_inf()
    {
        return $this->belongsTo(User::class,'third_pro_influencer','id');
    }
}
