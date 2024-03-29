<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comic extends Model
{
    use HasFactory;

    //fillable
    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type'
    ];

    protected $casts = [
        'price' => 'decimal:2'
    ];
}
