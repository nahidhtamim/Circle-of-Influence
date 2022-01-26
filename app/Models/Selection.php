<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    use HasFactory;

    protected $table = 'selections';

    protected $fillable = [
        'activity_name',
    ];

    public function influencers()
    {
        return $this->hasMany(Influencer::class);
    }
}
