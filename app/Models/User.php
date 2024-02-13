<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ["name", "email", "password", "role"];

    public static function findByVal($clmn, $val)
    {
        $sql = self::where($clmn, $val)->first();
        return $sql;
    }
}
