<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rental extends Model
{
    use HasFactory;

    // protected $table = 'rental';
    // protected $table = [];
    protected $guarded = ['id'];

    public function detailrental()
    {
        // return $this->belongsTo(detail_rental::class);
        return $this->hasMany(detail_rental::class);
    }
}
