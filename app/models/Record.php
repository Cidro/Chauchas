<?php

class Record extends Eloquent {

    public function user(){
        return $this->belongsTo('User');
    }

    public function accounts(){
        return $this->belongsToMany('Account');
    }

} 