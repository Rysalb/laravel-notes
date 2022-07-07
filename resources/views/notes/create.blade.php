
@extends('notes.bootstrap')


    <h1>Create Note</h1>

    <form action="/notes" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul">
            <label for="title">Judul</label>
          </div>
        <br>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Masukkan deskripsi" id="body" name="body"></textarea>
            <label for="body">Deskripsi</label>
          </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Save</button>

    </form>
