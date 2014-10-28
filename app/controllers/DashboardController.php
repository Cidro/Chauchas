<?php

class DashboardController extends BaseController {
    protected $layout = 'layouts/main';

    public function getIndex(){
        $this->layout->title = 'Chauchas';
    }
} 