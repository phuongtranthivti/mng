<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectMember extends Model
{
    protected $table = 'project_member';

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function project()
    {
        return $this->belongsTo('App\Project', 'pr_code');
    }
}
