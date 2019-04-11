<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Work1 extends Model
{
    protected $table = "work1s";

    protected $fillable = ['email', 'member', 'kname', 'ename', 'sex', 'spot',
                           'position', 'callNumber'];
}
