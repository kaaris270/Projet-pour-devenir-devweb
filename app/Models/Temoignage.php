<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Temoignage extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'users_id','text'
    ];
    public function Seller()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}