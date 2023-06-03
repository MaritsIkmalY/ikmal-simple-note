<x-main-layout>
    <x-success />
    <div class="m-5">
        <a href="{{ route('note.create') }}" class="btn btn-primary">Tambah note</a>
    </div>
    @if (count($notes) == 0)
        <div class="text-center"><span>Notes kamu masih kosong</span></div>
    @else
        <div class="table-responsive">
            <table class="table table-striped mx-auto w-50">
                <caption>Notes kamu</caption>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                @foreach ($notes as $note)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $note->title }}</td>
                        <td>{{ $note->description }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('note.destroy', $note->id) }}" method="POST">
                                <a href="{{route('note.edit', $note->id)}}" class="btn btn-sm btn-primary">edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif
</x-main-layout>
