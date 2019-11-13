<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pontuacao extends Model
{
    protected $table='pontuacao';
    public $primaryKey='id';
    public $timestamp=false;
}
