@extends('layouts.app')

@section('title', 'Edit To-Do List')

@section('header', 'Edit To-Do List')

@section('content')
    <form action="{{ route('todolist.updateNama', $todolist->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="nama_tugas" class="form-label">Nama Tugas</label>
            <input type="text" name="nama_tugas" class="form-control" value="{{ $todolist->nama_tugas }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
