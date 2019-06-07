<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable =array('country','implementing_office',
    'project_title','Grant_amount','date_from_CGF','start_Date');

    // public function parokias(){
    //     return $this->hasMany('App\Parokia');
    // }

    // public function registration(){
    //     return $this->belongsTo('App\Registration');
    // }
}
