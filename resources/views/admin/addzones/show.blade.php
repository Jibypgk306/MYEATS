<x-admin-master>
    @section('content')

        <h2>Zone Details:{{$addzone->name}} </h2>

        <form method="post" action="{{route('addzone.show', $addzone->id)}}" enctype="multipart/form-data">
            @csrf
            <h5 class="mt-4">ID:  {{$addzone->id}}</h5>
            <h5 class="mt-4">Name:  {{$addzone->name}}</h5>
            
    @endsection
</x-admin-master>
