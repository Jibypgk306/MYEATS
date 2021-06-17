<x-admin-master>
    @section('content')

        <h1>Edit </h1>

        <form method="post" action="{{route('adduser.update', $adduser->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text"
                       name="firstname"
                       class="form-control"
                       id="firstname"
                       aria-describedby=""
                       placeholder="Enter firstname"
                       value="{{$adduser->firstname}}"

                >
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    @endsection
</x-admin-master>