<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    use HasFactory;
    protected $table = 'mhs';
    protected $primarykey = 'id';
    protected $fillable = ['nama','nim', "kelas", "des"];
}
