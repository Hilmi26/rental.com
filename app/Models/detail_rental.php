<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_rental extends Model
{
    use HasFactory;

    // protected $table = 'detail_rental';
    protected $guarded = ['id'];

    public function rental()
    {
        // return $this->hasMany(rental::class);
        return $this->belongsTo(rental::class);
    }
}
