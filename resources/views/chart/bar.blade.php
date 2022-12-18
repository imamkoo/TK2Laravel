@extends('dashboard')

@section('content')

<body class="h-screen bg-gray-100">

    <div class="container px-4 mx-auto">

        <div class="p-6 m-20 bg-white rounded shadow">
            {!! $barChart->container() !!}
        </div>

    </div>

    <script src="{{ $barChart->cdn() }}"></script>

    {{ $barChart->script() }}
</body>

</html>

@endsection
