<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = ['id', 'name', 'google_url', 'sheetsu_url'];
    public $timestamps = false;
}
