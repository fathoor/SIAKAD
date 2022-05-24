<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKuesioner extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'hasil_kuesioner';

    public $timestamps = false;
}
