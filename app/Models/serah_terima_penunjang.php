<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serah_terima_penunjang extends Model
{
    use HasFactory;
       // protected $connection = 'mysql2';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $table = 'serah_terima_penunjang';
    protected $guarded = ['id'];
}
