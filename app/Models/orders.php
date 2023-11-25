<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class orders extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(users::class, 'email_id', 'email_id');
    }

    public function orderItems()
    {
        return $this->hasMany(order_item::class, 'order_id');
    }

}
