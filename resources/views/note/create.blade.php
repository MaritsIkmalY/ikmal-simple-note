<x-main-layout>
    <x-error />
    <div class="mx-5">
        <h1>Notes</h1>
        <form method="post" action="{{ route('note.store') }}">
            @csrf
            <div class="col-sm-5 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="col-sm-5 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button type="update" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-main-layout>
