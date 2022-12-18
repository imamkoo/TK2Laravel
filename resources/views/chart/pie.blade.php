@extends('dashboard')

@section('content')

<body class="h-screen bg-gray-100">

    <div class="container px-4 mx-auto">

        <div class="p-6 m-20 bg-white rounded shadow">
            {!! $pieChart->container() !!}
        </div>

    </div>

    <script src="{{ $pieChart->cdn() }}"></script>

    {{ $pieChart->script() }}
</body>

</html>

@endsection
