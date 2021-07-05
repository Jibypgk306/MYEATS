<x-admin-master>
    @section('content')

        <h2> Details:{{$addrestaurent->name}} </h2>

        <form method="post" action="{{route('addrestaurent.show', $addrestaurent->id)}}" enctype="multipart/form-data">
            @csrf
            <h5 class="mt-4">Name: <center> {{$addrestaurent->name}}</center></h5>
            <h5>Address:<center> {{$addrestaurent->adress}}</center></h5>
            <h5 class="mt-4">City: <center><a href="{{route('addcitie.show', $addrestaurent->addcity->id)}}">{{$addrestaurent->addcity->name}}</a></center></h5>
            <h5 class="mt-4">Zone: <center><a href="{{route('addzone.show', $addrestaurent->addzone->id)}}">{{$addrestaurent->addzone->name}}</a></center></h5>
            <h5>Logo:<center><img src="{{Storage::url($addrestaurent->logo) }}" width="350" height="250" alt="image" /></center></h5>
            <center><a href="/images/logo.jpg" download>Download</center></a>
            <h5>Banner:<center><img src="{{Storage::url($addrestaurent->banner) }}" width="350" height="250" alt="image" /></center></h5>
            <center><a href="/images/banner.jpg" download>Download</a></center>

            <h5>Minimum order value: <center>{{$addrestaurent->minvalue}}</center></h5>
            <h5>Cost for two people:<center> {{$addrestaurent->cost}}</center></h5>
            <h5>Default preparation time:<center> {{$addrestaurent->time}}</center></h5>
            <h5 class="mt-4">Cuisines:<center>{{$addrestaurent->addcuisine->name}}</center></h5>
            <h5>Is Open:<center>@if($addrestaurent->is_open==1)
                    <img src="{{ asset('images/tick.jpg') }}" alt="tag" width="25" height="25">
                    @else
                    <img src="{{ asset('images/wrong.png') }}" alt="tag" width="25" height="25">
                    @endif</center></h5>
                    <h5>Allow Pickup:<center>@if($addrestaurent->pickup==1)
                    <img src="{{ asset('images/tick.jpg') }}" alt="tag" width="25" height="25">
                    @else
                    <img src="{{ asset('images/wrong.png') }}" alt="tag" width="25" height="25">
                    @endif</center></h5>
                    <h5>24X7 Open:<center>@if($addrestaurent->open==1)
                    <img src="{{ asset('images/tick.jpg') }}" alt="tag" width="25" height="25">
                    @else
                    <img src="{{ asset('images/wrong.png') }}" alt="tag" width="25" height="25">
                    @endif</center></h5> 
            <h5 class="mt-4">Status: <center>{{$addrestaurent->status}}</center></h5>


    @endsection
</x-admin-master>
