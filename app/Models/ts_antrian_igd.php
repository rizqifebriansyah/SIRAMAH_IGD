<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ts_antrian_igd extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $table = 'tp_karcis_igd';
    protected $guarded = ['id'];
}
