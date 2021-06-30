<x-admin-master>
    @section('content')

        <h2> Details:{{$addrestaurent->name}} </h2>

        <form method="post" action="{{route('addrestaurent.show', $addrestaurent->id)}}" enctype="multipart/form-data">
            @csrf
            <h5 class="mt-4">Name:  {{$addrestaurent->name}}</h5>
            <h5 class="mt-4">About:  {{$addrestaurent->addcity->name}}</h5>
            <h5>Logo:<img src="{{Storage::url($addrestaurent->logo) }}" width="75" height="75" alt="image" /></h5>
    @endsection
</x-admin-master>
