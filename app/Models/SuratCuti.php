<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratCuti extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'surat_cuti';

    public $timestamps = false;
}
