<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'kuesioner';

    public $timestamps = false;
}
