<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avioni extends Model
{
    use HasFactory;

    protected $fillable = [
        'broj_karte'
        ];

        protected $table = 'karte';

    //     public function memberships(){
    //         return $this->hasOne(Membership::class, 'id');
    // }

}