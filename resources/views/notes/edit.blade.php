
@extends('notes.bootstrap')


<h1>Edit Note</h1>

<form action="/notes/{{ $note->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul" value="{{ $note->title }}">
        <label for="title">Judul</label>
      </div>
    <br>
    <div class="form-floating">
        <input type="text"  class="form-control" id="body" name="body" placeholder="Masukkan deskripsi" value="{{ $note->body }}">
        <label for="body">Deskripsi</label>
      </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Save</button>

</form>
