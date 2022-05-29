<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class MataKuliah extends Model
{
    use HasFactory;
    use Sortable;


    protected $guarded = ['id'];

    protected $table = 'mata_kuliah';

    protected $fillable = ['kodeMataKuliah','kodeKelas','namaMataKuliah','sks','tahunKurikulum','semester'];

    public $timestamps = false;

    public $sortable =['KodeMataKuliah','kodeKelas','namaMataKuliah','sks','tahunKurikulum','semester'];
}
