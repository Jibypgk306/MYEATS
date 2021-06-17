<x-admin-master>
    @section('content')

        <h1>User Details:{{$adduser->firstname}} </h1>

        <form method="post" action="{{route('adduser.show', $adduser->id)}}" enctype="multipart/form-data">
            @csrf
            <h1 class="mt-4">ID:  {{$adduser->id}}</h1>
            <h1 class="mt-4">Avatar:  <img src="{{ asset('images/logo.jpg') }}" alt="tag" width="50" height="50"></h1>
            <h1 class="mt-4">Name:  {{$adduser->firstname}}&nbsp;{{$adduser->lastname}}</h1>
            <h1 class="mt-4">Email :  {{$adduser->email}}</h1>
            <h1 class="mt-4">Mobile :  {{$adduser->mobile}}</h1>

    @endsection
</x-admin-master>
