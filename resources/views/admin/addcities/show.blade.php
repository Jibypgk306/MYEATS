<x-admin-master>
    @section('content')

        <h2>City Details:{{$citie->name}} </h2>

        <form method="post" action="{{route('addcitie.show', $citie->id)}}" enctype="multipart/form-data">
            @csrf
            <h5 class="mt-4">ID:  {{$citie->id}}</h5>
            <h5 class="mt-4">Name:  {{$citie->name}}</h5>
            
    @endsection
</x-admin-master>
