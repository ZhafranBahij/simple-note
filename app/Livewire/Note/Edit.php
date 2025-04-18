<?php

namespace App\Livewire\Note;

use App\Models\Note;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app-livewire')]
class Edit extends Component
{
    public Note $note;
    public $title = '';
    public $description = '';

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
    ];

    public function mount(Note $note)
    {
        $this->note = $note;
        $this->title = $note->title;
        $this->description = $note->description;
    }

    public function update()
    {
        $this->validate();

        $this->note->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        session()->flash('success', 'Note updated successfully!');
        return redirect()->route('note-livewire.index');
    }

    public function render()
    {
        return view('livewire.note.edit');
    }
}
