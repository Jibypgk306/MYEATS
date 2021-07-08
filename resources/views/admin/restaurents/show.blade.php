<x-admin-master>
    @section('content')

        <h2> Details:{{$restaurent->name}} </h2>

        <form method="post" action="{{route('restaurent.show', $restaurent->id)}}" enctype="multipart/form-data">
            @csrf
            
            <h5 class="mt-4">Name: <center> {{$restaurent->name}}</center></h5>
            <h5>Address:<center> {{$restaurent->adress}}</center></h5>
            <h5 class="mt-4">Zone: <center><a href="{{route('addzone.show', $restaurent->addzone->id)}}">{{$restaurent->addzone->name}}</a></center></h5>
            
            <h5>Logo:<center><img src="{{Storage::url($restaurent->logo) }}" width="350" height="250" alt="image" /></center></h5>
            <center><a href="/images/logo.jpg" download>Download</center></a>
            <h5>Banner:<center><img src="{{Storage::url($restaurent->banner) }}" width="350" height="250" alt="image" /></center></h5>
            <center><a href="/images/banner.jpg" download>Download</a></center>
            <h5>Minimum order value: <center>{{$restaurent->minvalue}}</center></h5>
            <h5 class="mt-4">City: <center><a href="{{route('addcitie.show', $restaurent->city->id)}}">{{$restaurent->city->name}}</a></center></h5>
            <h5 class="mt-4">Cusines: 
            @foreach ($restaurent->cuisine as $cuisine)
            <center>{{$cuisine->name}} </center>
            @endforeach</h5>
            <h5>Cost for two people:<center> {{$restaurent->cost}}</center></h5>
            <h5>Default preparation time:<center> {{$restaurent->time}}</center></h5>
            <h5>Is Open:<center>@if($restaurent->is_open==1)
                    <img src="{{ asset('images/tick.jpg') }}" alt="tag" width="25" height="25">
                    @else
                    <img src="{{ asset('images/wrong.png') }}" alt="tag" width="25" height="25">
                    @endif</center></h5>
                    <h5>Allow Pickup:<center>@if($restaurent->pickup==1)
                    <img src="{{ asset('images/tick.jpg') }}" alt="tag" width="25" height="25">
                    @else
                    <img src="{{ asset('images/wrong.png') }}" alt="tag" width="25" height="25">
                    @endif</center></h5>
                    <h5>24X7 Open:<center>@if($restaurent->open==1)
                    <img src="{{ asset('images/tick.jpg') }}" alt="tag" width="25" height="25">
                    @else
                    <img src="{{ asset('images/wrong.png') }}" alt="tag" width="25" height="25">
                    @endif</center></h5> 
            <h5 class="mt-4">Status: <center>{{$restaurent->status}}</center></h5>


    @endsection
</x-admin-master>
