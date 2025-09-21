@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
    <div class="mt-3">
    <h5>To-Do List Hari Ini: <strong>{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y - H:i') }}</strong></h5>
        
        <!-- Form Tambah Tugas -->
        <form method="POST" action="{{ route('todolist.store') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="nama_tugas" class="form-control" placeholder="Tambahkan tugas baru">
                <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
            </div>
        </form>

        <!-- Tabel To-Do List -->
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tugas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todolists as $index => $todolist)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $todolist->nama_tugas }}</td>
                        <td>
                            <form method="POST" action="{{ route('todolist.update', $todolist->id) }}">
                                @csrf
                                @method('PATCH')
                                <select name="status_tugas" class="form-select" onchange="this.form.submit()">
                                    <option value="pending" {{ $todolist->status_tugas == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="completed" {{ $todolist->status_tugas == 'completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('todolist.edit', $todolist->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Hapus -->
                            <form method="POST" action="{{ route('todolist.destroy', $todolist->id) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tombol Lihat Riwayat To-Do List -->
        <a href="{{ route('todolist.history') }}" class="btn btn-info mt-3">Lihat Riwayat To-Do List</a>

        <!-- Tombol Logout -->
        <form action="{{ route('logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
@endsection
