<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    protected $fillable = ['nome','sigla','ano','eixo'];
    use SoftDeletes;
    use HasFactory;
}
