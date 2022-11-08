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

    protected $fillable = [
        'nama_rental',
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function detailrental()
    {
        // return $this->belongsTo(detail_rental::class);
        return $this->hasMany(detail_rental::class);
    }
}
