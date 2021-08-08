<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Side extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type'];

    /**
    * Boot the Model.
    */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($protien) {
            $protien->uid = Str::uuid();;
        });
    }
}