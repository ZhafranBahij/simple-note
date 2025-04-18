<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Note') }}</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <div class="form-control-plaintext">{{ $note->title }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <div class="form-control-plaintext">{{ $note->description }}</div>
                    </div>
                    <a class="btn btn-secondary" href="{{ route('note.index') }}">Back</a>
                    <a class="btn btn-warning" href="{{ route('note.edit', $note->id) }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
