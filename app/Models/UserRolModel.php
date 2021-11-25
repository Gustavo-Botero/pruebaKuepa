<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRolModel extends Model
{
    use HasFactory;

    protected $table = 'user_rol';

    protected $fillable = [
        'user_id',
        'rol_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rol()
    {
        return $this->belongsTo(RolModel::class);
    }
}
