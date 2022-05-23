<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratUndurDiri extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'surat_undur_diri';

    public $timestamps = false;
}
