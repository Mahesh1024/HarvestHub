<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function orders()
    {
        return $this->hasMany(orders::class, 'email_id');
    }

}
