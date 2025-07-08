<?php

namespace DanielleFence\Notes\View\Components;

use Illuminate\View\Component;

class Notes extends Component
{
    public $model;
    public function __construct($model) {
        $this->model = $model;
    }
    public function render()
    {

        return view('df::components.notes',[
            'model'=>$this->model
        ]);
    }
}