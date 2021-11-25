<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProgramaModel extends Model
{
    use HasFactory;

    protected $table = 'user_programa';

    protected $fillable = [
        'user_id',
        'programa_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function programa()
    {
        return $this->belongsTo(ProgramaModel::class);
    }
}
