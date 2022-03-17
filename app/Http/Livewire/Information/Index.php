<?php

namespace App\Http\Livewire\Information;

use App\Models\Information;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $information = Information::orderBy('id', 'desc')
            ->where('title', 'like', '%' . $this->search . '%')
            ->orWhere('description', 'like', '%' . $this->search . '%')
            ->orWhere('author', 'like', '%' . $this->search . '%')
            ->paginate(10);
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
