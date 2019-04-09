<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = "work5_data";
    
    protected $fillable = ['email', 'member', 'kname', 'ename', 'sex', 'spot',
                            'position', 'callnum'];
}
