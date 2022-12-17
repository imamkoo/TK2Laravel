@extends('dashboard')

@section('content')

<section class="row">
    <div class="row">
        <div class="page-heading col-6">
            <h3>Nilai Mahasiswa</h3>
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
                                <img src="{{ asset('admin') }}/assets/images/faces/3.jpg" alt="Face 3">
                            </div>
                            <div class="row">
                                <div class="ms-3 name col-12">
                                    <h5 style="font-size: 0.85rem;">{{ $mahasiswa->NIM }}</h5>
                                    <h5 class="font-bold">{{ $mahasiswa->nama }}</h5>
                                    <h6 class="text-muted mb-0">GPA : {{ $mahasiswa->GPA }}</h6>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="{{ route('createNilai',$mahasiswa->id) }}" type="button"
                                    class="btn btn-primary btn-sm hover-nilai">
                                    Input Nilai</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="h-screen bg-gray-100">
        <div class="container px-6 mx-auto">
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>
        </div>
    </div>
    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
</section>

@endsection
