@extends('dashboard')

@section('content')

<div class="row p-2">
    <form action="{{ route('update',$mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIM</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="NIM Mahasiswa" name="NIM" value="{{ $mahasiswa->NIM }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nama" name="nama" value="{{ $mahasiswa->nama }}">
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <option value="Laki-Laki" @if ($mahasiswa->jenis_kelamin == 'Laki-Laki')
                    selected
                    @endif>Laki-Laki</option>
                <option value="Perempuan" @if ($mahasiswa->jenis_kelamin == 'Perempuan')
                    selected
                    @endif>Perempuan</option>
            </select>
        </div>
</div>
<div class="">
    <a href="{{ route('index') }}" class="btn btn-secondary m-2">Back</a>
    <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>

@endsection
