<?php

namespace App\Livewire\Note;

use App\Models\Note;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app-livewire')]
class Index extends Component
{   
    use WithPagination;

    public function delete(Note $note)
    {
        $note->delete();
        session()->flash('success', 'Note deleted successfully!');
        // Optionally, reset the page if the current page is empty after deletion
        $this->resetPage();
    }

    public function render()
    {
        $data = Note::query()
                    ->latest()
                    ->paginate(10);

        return view('livewire.note.index', [
            'data' => $data
        ]);
    }
}
