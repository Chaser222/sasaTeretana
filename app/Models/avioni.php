<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avioni extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv', 'model', 'broj_sjedista', 'phone', 'memberships_id'
        ];

        protected $table = 'avioni';

}