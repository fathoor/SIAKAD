<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FRS extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'frs';

    public $timestamps = false;
}