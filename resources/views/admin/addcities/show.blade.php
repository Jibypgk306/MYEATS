<x-admin-master>
    @section('content')

        <h2>City Details:{{$addcitie->name}} </h2>

        <form method="post" action="{{route('addcitie.show', $addcitie->id)}}" enctype="multipart/form-data">
            @csrf
            <h5 class="mt-4">ID:  {{$addcitie->id}}</h5>
            <h5 class="mt-4">Name:  {{$addcitie->name}}</h5>
            
    @endsection
</x-admin-master>
