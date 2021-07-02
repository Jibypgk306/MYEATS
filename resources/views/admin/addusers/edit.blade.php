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
                       class="form-control @error('lastname') is-invalid @enderror"
                       id="lastname"
                       aria-describedby=""
                       placeholder="Enter lastname"
                       value="{{$adduser->lastname}}">
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
                       placeholder="Enter email"
                       value="{{$adduser->email}}">
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
                       placeholder="Enter mobile number"
                       value="{{$adduser->mobile}}">
                       @error('mobile')
                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       id="password"
                       aria-describedby=""
                       value="{{$adduser->password}}"
                       placeholder="Enter password">
            </div>
            <div class="form-group">
            <label for="block_user">Block User</label>                      
<select name="block_user" class="form-control" id="block_user" aria-describedby="">
<option value="" disabled>Choose an Option</option>
<option {{ old('block_user',$adduser->block_user) == 'active'? 'selected':'' }} value="active">Active</option>
<option {{ old('block_user',$adduser->block_user) == 'blocked'? 'selected':'' }} value="blocked">Blocked</option>
</select>
</div>
<a class="btn " href="{{route('adduser.index')}}" role="button"><b>Cancel</a>
<button type="submit" class="btn btn-primary"><b>Update User<b></button>
</form>
@endsection
</x-admin-master>