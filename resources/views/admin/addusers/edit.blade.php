<x-admin-master>
    @section('content')

        <h2>Update user : {{$adduser->firstname}}&nbsp;{{$adduser->lastname}}</h2>

        <form method="post" action="{{route('adduser.update', $adduser->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text"
                       name="firstname"
                       class="form-control @error('firstname') is-invalid @enderror"
                       id="firstname"
                       aria-describedby=""
                       placeholder="Enter firstname"
                       value="{{$adduser->firstname}}">
                       @error('firstname')
    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text"
                       name="lastname"
                       class="form-control"
                       id="lastname"
                       aria-describedby=""
                       placeholder="Enter lastname"
                       value="{{$adduser->lastname}}"

                >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text"
                       name="email"
                       class="form-control"
                       id="email"
                       aria-describedby=""
                       placeholder="Enter email"
                       value="{{$adduser->email}}"

                >
            </div>

            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text"
                       name="mobile"
                       class="form-control"
                       id="mobile"
                       aria-describedby=""
                       placeholder="Enter mobile number"
                       value="{{$adduser->mobile}}"

                >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       id="password"
                       aria-describedby=""
                       placeholder="Enter password"
                       value="{{$adduser->password}}"

                >
            </div>
            <div class="form-group">
                <label for="block_user">Block User</label>
               
                       <select name="block_user"
                       class="form-control"
                       id="block_user"
                       aria-describedby="">
                       <option value="" disabled>Choose an Option</option>
                       <option value="{{$adduser->block_user}}">Active</option>
                       <option value="blocked">Blocked</option>
                        </select>
            </div>
            <a  class="btn " href="{{route('adduser.index')}}" role="button"><b>Cancel</a>

            <button type="submit" class="btn btn-primary"><b>Update User<b></button>
        </form>
    @endsection
</x-admin-master>