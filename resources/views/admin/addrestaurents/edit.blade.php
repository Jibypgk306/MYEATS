<x-admin-master>
    @section('content')

        <h2>Update :</h2>

        <form method="post" action="{{route('addrestaurent.update', $addrestaurent->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                            <label for="name">Name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control
                                       @error('name') is-invalid @enderror"
                                       id="name"
                                       aria-describedby=""
                                       placeholder="Enter name"
                                       value="{{$addrestaurent->name}}">
                                       
                                       @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                        </div>


                        <div class="form-group">
                            <label for="about">About</label>
                                <input type="text"
                                       name="about"
                                       class="form-control @error('about') is-invalid @enderror"
                                       id="about"
                                       aria-describedby=""
                                       placeholder="about"
                                       value="{{$addrestaurent->about}}">
                                       @error('about')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        <div class="form-group">
                            <label for="adress">Adress</label>
                                <input type="text"
                                       name="adress"
                                       class="form-control @error('adress') is-invalid @enderror"
                                       id="adress"
                                       aria-describedby=""
                                       placeholder="Enter adress"
                                       value="{{$addrestaurent->adress}}">
                                       @error('adress')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
                                
                                <div class="form-group">
                            <label for="location">Location</label>
                                <input type="text"
                                       name="location"
                                       class="form-control @error('location') is-invalid @enderror"
                                       id="location"
                                       aria-describedby=""
                                       placeholder="Enter location"
                                       value="{{$addrestaurent->location}}">
                                       @error('location')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="minvalue">Minimum Order Value</label>
                                <input type="text"
                                       name="minvalue"
                                       class="form-control @error('minvalue') is-invalid @enderror"
                                       id="minvalue"
                                       aria-describedby=""
                                       placeholder="Enter minmum order value"
                                       value="{{$addrestaurent->minvalue}}">
                                       @error('minvalue')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror       
        </div>
           
        <div class="form-group">
                            <label for="cost">Cost for two people</label>
                                <input type="text"
                                       name="cost"
                                       class="form-control @error('cost') is-invalid @enderror"
                                       id="cost"
                                       aria-describedby=""
                                       placeholder="Enter cost"
                                       value="{{$addrestaurent->cost}}">
                                       @error('cost')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror       
        </div>

        <div class="form-group">
                            <label for="time">Default prepartion time</label>
                                <input type="text"
                                       name="time"
                                       class="form-control @error('time') is-invalid @enderror"
                                       id="time"
                                       aria-describedby=""
                                       placeholder="Default prepartion time"
                                       value="{{$addrestaurent->time}}">
                                       @error('time')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror       
        </div>

                                

                                <div class="form-group">
                            <label for="billing">Billing Email</label>
                                <input type="text"
                                       name="billing"
                                       class="form-control @error('billing') is-invalid @enderror"
                                       id="billing"
                                       aria-describedby=""
                                       placeholder="Billing email"
                                       value="{{$addrestaurent->billing}}">
                                       @error('billing')
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
                                       placeholder="Enter Number"
                                       value="{{$addrestaurent->mobile}}">
                                       @error('mobile')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 </div>  
 <div class="form-group row">
<label for="addcity_id">{{ __('City') }}</label>
<div class="col-sm-6">
<select class="form-control" name="addcity_id">
@foreach($addcities as $addcity)
<option value="{{ $addcity->id }}" {{ ($addcity->id == $addrestaurent->addcity_id) ? 'selected' : '' }}>{{ $addcity->name }}</option>
@endforeach
</select>
@error('city')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

 <div class="form-group row">
<label for="addzone_id" >{{ __('zone') }}</label>
<div class="col-sm-6">
<select class="form-control" name="addzone_id">
@foreach($addzones as $addzone)
<option value="{{ $addzone->id }}" {{ ($addzone->id == $addrestaurent->addzone_id) ? 'selected' : '' }}>{{ $addzone->name }}</option>
@endforeach
</select>
@error('zone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="form-group">
                    <strong>Logo</strong>
                    <input type="file" name="logo" class="form-control" placeholder="image">
                    <img src="{{Storage::url($addrestaurent->logo) }}" width="300px">
                </div>

 <div class="form-group">
                    <strong>Banner</strong>
                    <input type="file" name="banner" class="form-control" placeholder="image">
                    <img src="{{Storage::url($addrestaurent->banner) }}" width="300px">
                </div>

                
               
 <div class="form-group">
            <label for="status">Status</label>                      
<select name="status" class="form-control" id="status" aria-describedby="">
<option value="" disabled>Choose an Option</option>
<option {{ old('status',$addrestaurent->status) == 'active'? 'selected':'' }} value="Active">Active</option>
<option {{ old('status',$addrestaurent->status) == 'blocked'? 'selected':'' }} value="blocked">Blocked</option>
</select>
</div>
                                               
<a class="btn " href="{{route('addrestaurent.index')}}" role="button"><b>Cancel</a>
<button type="submit" class="btn btn-primary"><b>Update Restaurent<b></button>
</form>
@endsection
</x-admin-master>