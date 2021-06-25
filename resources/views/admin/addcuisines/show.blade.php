<x-admin-master>
    @section('content')

        <h2>Cuisine Details:{{$addcuisine->name}} </h2>

        <form method="post" action="{{route('addcuisine.show', $addcuisine->id)}}" enctype="multipart/form-data">
            @csrf
            <h5 class="mt-4">ID:  {{$addcuisine->id}}</h5>
            <h5 class="mt-4">Name:  {{$addcuisine->name}}</h5>
            
    @endsection
</x-admin-master>
