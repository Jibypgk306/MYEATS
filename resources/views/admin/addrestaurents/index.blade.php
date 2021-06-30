<x-admin-master>

    @section('content')
    <h2>Resstaurents</h2><br>

    <form>
    <input type="text"   name="name" value="{{ old('name') }}">
    <span class="input-group-btn">
    <button class="btn btn-secondary" type="submit">Search</button>
    </span>
    </form><br>


        @if(session('message'))
            <div class="alert alert-danger">{{session('message')}}</div>
            @elseif(session('restaurent-created-message'))
            <div class="alert alert-success">{{session('restaurent-created-message')}}</div>
            @elseif(session('restaurent-updated-message'))
            <div class="alert alert-success">{{session('restaurent-updated-message')}}</div>
        @endif
<div>
<button type="submit" class="btn btn-success">
<a href="{{route('addrestaurent.create')}}" >
Create Restaurent</a></button>

</div>
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>City</th>
                             <th>Logo</th>
                            <th>Banner</th>
                            <th>Minimum order value</th>
                            <th>Cost for two people</th>
                            <th>Default preparation time</th>
                            <th>Is Open</th>
                            <th>Allow Pickup</th>
                            <th>24x7 Open</th>
                            <th>Status<th>

                        </tr>
                        </thead>
                        
                        <tbody>

                        @foreach($addrestaurents as $addrestaurent)

                            <tr>
                                <td>{{$addrestaurent->name}}</td>
                                <td>{{$addrestaurent->addcity->name}}</td>
                                                   
                                <td><img src="{{Storage::url($addrestaurent->logo) }}" width="75" height="75" alt="image" /></td>
                                <td><img src="{{Storage::url($addrestaurent->banner) }}" width="75" height="75" alt="image" /></td>

                                <td>{{$addrestaurent->minvalue}}</td>
                                <td>{{$addrestaurent->cost}}</td>

                                <td>{{$addrestaurent->time}}</td>
                                <td>{{$addrestaurent->is_open}}</td>
                                <td>{{$addrestaurent->pickup}}</td>
                                <td>{{$addrestaurent->open}}</td>
                                <td>{{$addrestaurent->status}}</td>

                                <td><a href="{{route('addrestaurent.edit', $addrestaurent->id)}}">EDIT</a></td>
                                <td><a href="{{route('addrestaurent.show', $addrestaurent->id)}}">VIEW</a></td>
                            </tr>
                         @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="d-flex">
            <div class="mx-auto">
            {{$addrestaurents->links('pagination::bootstrap-4')}}
            </div>
        </div>


    @endsection

    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->

           <script src="{{asset('js/demo/datatables-demo.js')}}"></script>--}}
    @endsection

</x-admin-master>