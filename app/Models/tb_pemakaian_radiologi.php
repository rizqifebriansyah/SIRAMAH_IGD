<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pemakaian_radiologi extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $table = 'tb_pemakaian_radiologi';
    // protected $connection = 'mysql2';

    protected $guarded = ['id'];
}
