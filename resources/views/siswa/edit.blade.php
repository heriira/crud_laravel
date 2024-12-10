@extends('layout')

@section('konten')

<h4>Edit Siswa</h4>

<form action="{{ route('siswa.update', $siswa->id) }}" method="post">
    @csrf
    <label for="">NIS</label>
    <input type="number" name="nis" value="{{ $siswa->nis }}" class="form-control mb-2">
    <label for="">Nama</label>
    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
    <label for="">Alamat</label>
    <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control mb-2">
    <label for="">No HP</label>
    <input type="text" name="no_hp" value="{{ $siswa->no_hp }}" class="form-control mb-2">
    <label for="">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" class="form-control mb-2">
    <label for="">Hobi</label>
    <input type="text" name="hobi" value="{{ $siswa->hobi }}" class="form-control mb-2">

    <button class="btn btn-primary" type="submit">Submit</button>
</form>

@endsection