<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class di_pasien_diagnosa_frunit extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $table = 'di_pasien_diagnosa_frunit';
    protected $guarded = ['id'];
}
