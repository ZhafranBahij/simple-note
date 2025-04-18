<?php

namespace App\Livewire\Note;

use App\Models\Note;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app-livewire')]
class Show extends Component
{
    public Note $note;

    public function mount(Note $note)
    {
        $this->note = $note;
    }

    public function render()
    {
        return view('livewire.note.show');
    }
}
