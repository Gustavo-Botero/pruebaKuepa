<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaModel extends Model
{
    use HasFactory;

    protected $table = 'programa';

    protected $fillable = [
        'name',
    ];
}
