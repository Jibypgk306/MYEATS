<x-admin-master>
    @section('content')

        <h2>Cuisine Details:{{$cuisine->name}} </h2>

        <form method="post" action="{{route('cuisine.show', $cuisine->id)}}" enctype="multipart/form-data">
            @csrf
            <h5 class="mt-4">ID:  {{$cuisine->id}}</h5>
            <h5 class="mt-4">Name:  {{$cuisine->name}}</h5>
            
    @endsection
</x-admin-master>
