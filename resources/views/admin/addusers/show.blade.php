<x-admin-master>
    @section('content')

        <h1>User Details:{{$adduser->firstname}} </h1>

        <form method="post" action="{{route('adduser.show', $adduser->id)}}" enctype="multipart/form-data">
            @csrf
            <h5 class="mt-4">ID:  {{$adduser->id}}</h5>
            <h5 class="mt-4">Avatar:  <img src="{{ asset('images/logo.jpg') }}" alt="tag" width="50" height="50"></h5>
            <h5 class="mt-4">Name:  {{$adduser->firstname}}&nbsp;{{$adduser->lastname}}</h5>
            <h5 class="mt-4">Email :  {{$adduser->email}}</h5>
            <h5 class="mt-4">Mobile :  {{$adduser->mobile}}</h5>

    @endsection
</x-admin-master>
