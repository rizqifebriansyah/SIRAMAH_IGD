<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catatan_transfer_pasien extends Model
{
    use HasFactory;
    protected $connection = 'mysql3';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $table = 'catatan_transfer_pasien';
    protected $guarded = ['id'];
}
