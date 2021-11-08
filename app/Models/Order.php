<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }
}
