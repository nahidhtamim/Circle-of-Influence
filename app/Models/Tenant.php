<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $table = 'tenants';

    protected $fillable = [
        'tenant_name',
        'tenant_desc',
        'tenant_status',
        'meta_tenant_title',
        'meta_tenant_keywords',
    ];

    public function tenant_user()
    {
        return $this->hasMany(User::class);
    }
}
