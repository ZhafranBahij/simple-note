<?php

namespace App\Livewire\Note;

use App\Models\Note;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app-livewire')]
class Create extends Component
{
    public $title = '';
    public $description = '';

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
    ];

    public function save()
    {
        $this->validate();

        Note::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        session()->flash('success', 'Note created successfully!');
        $this->reset(['title', 'description']);
        // Optionally, redirect or emit an event here
        return redirect()->route('note-livewire.index');
    }

    public function render()
    {
        return view('livewire.note.create');
    }
}
