<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'code';
    public $incrementing = false;

    public function devision()
    {
        return $this->belongsTo('App\Devision', 'dvs_code');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile','user_id');
    }
}