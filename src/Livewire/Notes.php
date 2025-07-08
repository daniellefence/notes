<?php

namespace Daniellefence\Notes\Livewire;

use Daniellefence\Notes\Models\Note;
use Livewire\Component;

class Notes extends Component
{
    public $model;
    public $note;
    public $notes;
    public $modelId;
    public $modelClass;

    public function mount($modelId, $modelClass)
    {
        $this->modelId = $modelId;
        $this->modelClass = $modelClass;
        $this->model = $modelClass::find($modelId);
    }
    public function save() {
        $this->validate([
            'note'=>'required'
        ]);
        Note::create([
            'user_id'=>auth()->user()->id,
            'model_id'=>$this->model->id,
            'model_class'=>$this->model::class,
            'note'=>$this->note
        ]);
        $this->resetExcept([
            'model'
        ]);
    }
    public function render()
    {
        $this->notes = Note::all();
        return view('df::livewire.notes');
    }
}