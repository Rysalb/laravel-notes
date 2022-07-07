@extends('notes.bootstrap')

    <h1>List Notes</h1>
<table class="table">
    <thead>
      <tr >
        <th scope="col">id</th>
        <th scope="col">Judul</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Edit note</th>
        <th scope="col">Delete note</th>

        
      </tr>
    </thead>
    <tbody>
        @foreach($notes as $note)
      <tr>
            <th scope="row">{{ $note->id }}</th scope="row">
            <td>{{ $note->title }}</td>
            <td>{{ $note->body }}</td>
            <td>
                <a href="/notes/{{ $note->id }}/edit">Edit</a>
                
            </td>
            <td>
                <form action="/notes/{{$note->id}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete">
                </form>
            </td>
      </tr>
      @endforeach
    </tbody>
    <a href="/notes/create">Create Note</a>
  </table>
  


