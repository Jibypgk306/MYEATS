<x-admin-master>
    @section('content')

        <h1>Create User:</h1>

                <form method="post" action="{{route('addcitie.store')}}" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control
                                       @error('name') is-invalid @enderror"
                                       id="name"
                                       aria-describedby=""
                                       placeholder="Enter name">
                                       @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        
                      
                        <a  class="btn " href="{{route('addcitie.index')}}" role="button"><b>Cancel</a>
                        <button type="submit" class="btn btn-primary">Create City</b></button>

                        <button  class="btn btn-primary">Create and add another</button>

                </form>



    @endsection
</x-admin-master>