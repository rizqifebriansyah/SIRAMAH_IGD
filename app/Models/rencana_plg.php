<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rencana_plg extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $table = 'rencana_plg';
    protected $guarded = ['id'];
}
