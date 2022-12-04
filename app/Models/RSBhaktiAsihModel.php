<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSBhaktiAsihModel extends Model
{
    use HasFactory;

    protected $table = 'rs_bhakti_asih';
    protected $primaryKey = 'id';
    protected $fillable = ['gol_darah', 'jumlah'];
}
