<x-admin-master>
    @section('content')

        <h1>Create User:</h1>

                <form method="post" action="{{route('adduser.store')}}" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                                <input type="text"
                                       name="firstname"
                                       class="form-control
                                       @error('firstname') is-invalid @enderror"
                                       id="firstname"
                                       aria-describedby=""
                                       placeholder="Enter firstname">
                                       @error('firstname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Namee</label>
                                <input type="text"
                                       name="lastname"
                                       class="form-control @error('lastname') is-invalid @enderror"
                                       id="lastname"
                                       aria-describedby=""
                                       placeholder="Enter lastname">
                                       @error('lastname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                                <input type="text"
                                       name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       id="email"
                                       aria-describedby=""
                                       placeholder="Enter email">
                                       @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>


                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                                <input type="text"
                                       name="mobile"
                                       class="form-control @error('mobile') is-invalid @enderror"
                                       id="mobile"
                                       aria-describedby=""
                                       placeholder="Enter Number">
                                       @error('mobile')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                                <input type="password"
                                       name="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       id="password"
                                       aria-describedby=""
                                       placeholder="Enter password">
                                       @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror       
                        </div>
                        <a  class="btn " href="{{route('adduser.index')}}" role="button"><b>Cancel</a>
                        <button type="submit" class="btn btn-primary">Create User</b></button>

                        <button  class="btn btn-primary">Create and add another</button>

                </form>



    @endsection
</x-admin-master>