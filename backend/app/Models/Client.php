<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'customer_id',
        'first_name',
        'surname',
        'company_name',
        'email',
        'phone_number',
        'profession',
        'country',
        'city',
        'address',
        'status',
        'notes',
        'registered_at',
        'referred_by',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($client) {
            if (empty($client->customer_id)) {
                $client->customer_id = 'CUST-' . strtoupper(uniqid());
            }
        });
    }
}
