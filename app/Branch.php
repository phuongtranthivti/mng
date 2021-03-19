<?php


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Branch extends Model
{
    protected $table = 'branch';
    protected $primaryKey = 'br_code';
    //public $incrementing = false;

    public function company()
    {
        return $this->belongsTo('App\Company', 'cpn_code');
    }
}