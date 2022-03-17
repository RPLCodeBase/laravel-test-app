<?php

namespace App\Http\Livewire\Information;

use App\Models\Information;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $information = Information::orderBy('id', 'desc')->paginate(10);
        return view('livewire.information.index', compact('information'));
    }

    public function delete($id)
    {
        $information = Information::find($id);
        $information->delete();
        session()->flash('message', 'Information Deleted Successfully');
    }

    public function edit($id)
    {
        $information = Information::find($id);
        $this->emit('edit', $information);
    }
}
