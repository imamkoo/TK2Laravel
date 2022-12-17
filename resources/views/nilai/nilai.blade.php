@extends('dashboard')

@section('content')

<div class="row p-2">
    <form action="{{ route('hitungNilai',$mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quis</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nilai Quis" name="quis" value="{{ $mahasiswa->quis }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tugas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nilai Tugas" name="tugas" value="{{ $mahasiswa->tugas }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Absensi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nilai Absensi" name="absensi" value="{{ $mahasiswa->absensi }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Praktek</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nilai Praktek" name="praktek" value="{{ $mahasiswa->praktek }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">UAS</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nilai UAS" name="UAS" value="{{ $mahasiswa->UAS }}">
        </div>

</div>
<div class="">
    <a href="{{ route('nilai') }}" class="btn btn-secondary m-2">Back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

@endsection
