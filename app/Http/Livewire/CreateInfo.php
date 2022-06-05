<?php

namespace App\Http\Livewire;

use App\Models\Information;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateInfo extends Component
{

    public $title;
    public $description;
    public $image;
    public $slug;

    use WithFileUploads;


    public function render()
    {
        return view('livewire.create-info');
    }

    public function store()
    {
        $this->validate([
            'title'   => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = uniqid().time().'.'.$this->image->getClientOriginalExtension();
        $this->image->storeAs('public/information', $imageName);
        $information = Information::create([
            'title'     => $this->title,
            'description'   => $this->description,
            'slug' => Str::slug($this->title),
            'author'  => auth()->user()->name,
            'image'   => $imageName,
        ]);


        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('info');
    }
}
