@extends('layout')

@section('konten')

<div class="d-flex mt-5">
    <h4>List Siswa</h4>
    <div class="ms-auto">
        <a href="{{ route('siswa.tambah') }}" class="btn btn-success">Tambah Siswa</a>
    </div>
</div>

<table class="table table-striped mt-3">
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Action</th>
    </tr>
    @foreach($siswa as $no=>$data)
    <tr>
        <td>{{$no+1}}</td>
        <td>{{ $data->nis }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>{{ $data->jenis_kelamin }}</td>
        <td>{{ $data->hobi }}</td>
        <td>
        <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-info"><i class="bi bi-pen-fill text-white"></i></a>
                <form action="{{ route('siswa.delete', $data->id) }}" method="post" onsubmit="return confirmDeleteWithNotification(event)">
                    @csrf
                    <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                </form>
        </td>
    </tr>
    @endforeach
</table>

<script>
    if (Notification.permission !== "granted") {
        Notification.requestPermission();
    }

    function confirmDeleteWithNotification(event) {
        event.preventDefault();

        if (Notification.permission === "granted") {
            new Notification('Konfirmasi Penghapusan', {
                body: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: '/path-to-your-icon/icon.png',
            });
        }

        const userConfirmed = confirm('Apakah Anda yakin ingin menghapus data ini?');
        if (userConfirmed) {
            event.target.submit();
        }
    }
</script>

@endsection