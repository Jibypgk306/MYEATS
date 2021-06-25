<x-admin-master>
    @section('content')

        <h2>Update Cuisine : {{$addcuisine->name}}</h2>

        <form method="post" action="{{route('addcuisine.update', $addcuisine->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"
                       name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       id="name"
                       aria-describedby=""
                       placeholder="Enter name"
                       value="{{$addcuisine->name}}">
                       @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            
            
<a class="btn " href="{{route('addcuisine.index')}}" role="button"><b>Cancel</a>
<button type="submit" class="btn btn-primary"><b>Update Cuisine<b></button>
</form>
@endsection
</x-admin-master>