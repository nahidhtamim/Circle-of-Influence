<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer_Type extends Model
{
    use HasFactory;

    protected $table = 'influencer_types';

    protected $fillable = [
        'influencer_type',
        'type_status',
    ];
}
