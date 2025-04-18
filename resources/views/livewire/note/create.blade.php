<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Note</div>
                <div class="card-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" wire:model="title" class="form-control">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" wire:model="description" class="form-control">
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <a href="{{ route('note-livewire.index') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
