<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_user extends Model
{
    use HasFactory;

    protected $table ='detail_users';

    protected $guarded = ['id'];

    public function user(){
        return $this -> belongsTo(User::class);
    }
}
