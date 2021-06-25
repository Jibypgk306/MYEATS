<x-admin-master>

    @section('content')
    <h2>Cuisines</h2><br>
    <form>
    <input type="text"   name="name" value="{{ old('name') }}">
    <span class="input-group-btn">
    <button class="btn btn-secondary" type="submit">Search</button>
    </span>
    </form><br>
        @if(session('message'))
            <div class="alert alert-danger">{{session('message')}}</div>
            @elseif(session('cuisine-created-message'))
            <div class="alert alert-success">{{session('cuisine-created-message')}}</div>
            @elseif(session('cuisine-updated-message'))
            <div class="alert alert-success">{{session('cuisine-updated-message')}}</div>
        @endif
<div>
<button type="submit" class="btn btn-success">
<a href="{{route('addcuisine.create')}}" >
Create Cuisine</a></button>

</div>
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                        <th></th>
                            <th>Name</th>
                            
                            <th>Edit</th>
                            <th>View</th>

                        </tr>
                        </thead>
                        
                        <tbody>

                        @foreach($addcuisines as $addcuisine)

                            <tr>
                                <td><img src="{{ asset('images/logo.jpg') }}" alt="tag" width="25" height="25"></td>
                                <td>{{$addcuisine->name}}</td>
                                <td><a href="{{route('addcuisine.edit', $addcuisine->id)}}">EDIT</a></td>
                                <td><a href="{{route('addcuisine.show', $addcuisine->id)}}">VIEW</a></td>
                            </tr>
                         @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="d-flex">
            <div class="mx-auto">
            {{$addcuisines->links('pagination::bootstrap-4')}}
            </div>
        </div>


    @endsection

    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->

    /**
    *  __Construct method
    */
    public function __construct()
    {
    }

    /**
    *  __Construct method
    */
    public function __construct()
    {
    }

    /**
    *  __Construct method
    */
    public function __construct()
    {
    }
{{--            <script src="{{asset('js/demo/datatables-demo.js')}}"></script>--}}
    @endsection

</x-admin-master>