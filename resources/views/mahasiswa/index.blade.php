@extends('dashboard')

@section('content')



<section class="row">
    <div class="row">
        <div class="page-heading col-6">
            <h3>Data Mahasiswa</h3>
        </div>
        <div class="col-6 m-auto">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Tambah data mahasiswa
            </button>
        </div>
    </div>
    <div class="col-12 col-lg-12">
        @include('mahasiswa.alert')
        <div class="row">
            @foreach ($dataMahasiswa as $mahasiswa)
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center d-inline-flex">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('admin') }}/assets/images/faces/2.jpg" alt="Face 2">
                            </div>
                            <div class="row">
                                <div class="ms-3 name col-12">
                                    <h5 style="font-size: 0.85rem;">{{ $mahasiswa->NIM }}</h5>
                                    <h5 class="font-bold">{{ $mahasiswa->nama }}</h5>
                                    <h6 class="text-muted mb-0">GPA : {{ $mahasiswa->GPA }}</h6>
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="hover-edit"><a href="{{ route('edit',$mahasiswa->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a></span>
                                <span class="hover-delete"><a href="{{ route('delete',$mahasiswa->id) }}"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin dihapus ?')">Delete</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="NIM Mahasiswa" name="NIM">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Nama Mahasiswa" name="nama">
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                            <option selected>Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
