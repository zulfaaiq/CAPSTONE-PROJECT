<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSUDKabTegalModel extends Model
{
    use HasFactory;

    protected $table = 'rsud_kab_tegal';
    protected $primaryKey = 'id';
    protected $fillable = ['gol_darah', 'jumlah'];
}
