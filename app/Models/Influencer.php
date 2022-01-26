<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    use HasFactory;

    protected $table = 'influencers';

    protected $fillable = [
        'user_id',
        'type_id',
        'influencer_id',
        'influencer_note',
        'selection_id',
        'influencer_no',
    ];

    public function user_inf()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function type()
    {
        return $this->belongsTo(Influencer_Type::class,'type_id','id');
    }

    public function influencer()
    {
        return $this->belongsTo(User::class,'influencer_id','id');
    }

    public function selection()
    {
        return $this->belongsTo(Selection::class,'selection_id','id');
    }
}
