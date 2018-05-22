<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelpam extends Model
{
    public $timestamps = false;
    protected $guarded = ['next', 'finish', 'previous'];
}
