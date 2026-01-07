<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalLog extends Model
{
    protected $fillable = [
        'tenant_id',
        'type',
        'message'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id', 'id');
    }
}
