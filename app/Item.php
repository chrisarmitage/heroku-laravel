<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Add your validation rules here
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    // Don't forget to fill this array
    protected $fillable = [
        'name',
        'description',
    ];
}
