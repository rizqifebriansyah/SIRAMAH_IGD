<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tx_rujukan_intern extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $table = 'tx_rujukan_intern';
    protected $guarded = ['id'];
}
