<?php

class Account extends Eloquent {

    public function records(){
        return $this->belongsToMany('Record');
    }

    public function users(){
        return $this->belongsToMany('User');
    }

} 