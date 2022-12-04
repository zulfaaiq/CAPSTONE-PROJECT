<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSUDKabBrebesModel extends Model
{
    use HasFactory;

    protected $table = 'rsud_kab_brebes';
    protected $primaryKey = 'id';
    protected $fillable = ['gol_darah', 'jumlah'];
}
