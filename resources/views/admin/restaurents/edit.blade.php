<x-admin-master>
    @section('content')
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyA6gEfQ--K1SIz2Zj8CRzWHUiK68bSEDXY"></script>
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    </head>
    <body>
        
    
        <h2>Update :</h2>

        <form method="post" action="{{route('restaurent.update', $restaurent->id)}}" enctype="multipart/form-data">
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
                                       value="{{$restaurent->name}}">
                                       
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
                                       value="{{$restaurent->about}}">
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
                                       value="{{$restaurent->adress}}">
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
                                       value="{{$restaurent->location}}">
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
                                       value="{{$restaurent->minvalue}}">
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
                                       value="{{$restaurent->cost}}">
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
                                       value="{{$restaurent->time}}">
                                       @error('time')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror       
        </div>

                                

                                <div class="form-group">
                            <label for="billing">Billing Email</label>
                                <input type="email"
                                       name="billing"
                                       class="form-control @error('billing') is-invalid @enderror"
                                       id="billing"
                                       aria-describedby=""
                                       placeholder="Billing email"
                                       value="{{$restaurent->billing}}">
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
                                       value="{{$restaurent->mobile}}">
                                       @error('mobile')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 </div>  
 
 <div class="form-group row">
<label for="city_id">{{ __('City') }}</label>
<div class="col-sm-6">
<select class="form-control" name="city_id">
@foreach($cities as $city)
<option value="{{ $city->id }}" {{ ($city->id == $restaurent->city_id) ? 'selected' : '' }}>{{ $city->name }}</option>
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
<option value="{{ $addzone->id }}" {{ ($addzone->id == $restaurent->addzone_id) ? 'selected' : '' }}>{{ $addzone->name }}</option>
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
                    <img src="{{Storage::url($restaurent->logo) }}" width="300px">
                </div>

 <div class="form-group">
                    <strong>Banner</strong>
                    <input type="file" name="banner" class="form-control" placeholder="image">
                    <img src="{{Storage::url($restaurent->banner) }}" width="300px">
                </div>  

                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">Is Open</label>
                                    <div class="col-sm-4">
                                        <div class="form-group ">
                                            <div class="form-check  @error('is_open') is-invalid @enderror">
                                                <input type="checkbox" id="is_open" name="is_open"  {{ old('is_open',$restaurent->is_open) == '1' ? 'checked' : '' }} value="1">
                                            </div>
                                            @error('is_open')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">Allow Pickup</label>
                                    <div class="col-sm-4">
                                        <div class="form-group ">
                                            <div class="form-check  @error('pickup') is-invalid @enderror">
                                                <input type="checkbox" id="pickup" name="pickup"  {{ old('pickup',$restaurent->pickup) == '1' ? 'checked' : '' }} value="1">
                                            </div>
                                            @error('pickup')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">24x7 Open</label>
                                    <div class="col-sm-4">
                                        <div class="form-group ">
                                            <div class="form-check  @error('open') is-invalid @enderror">
                                                <input type="checkbox" id="open" name="open"  {{ old('open',$restaurent->open) == '1' ? 'checked' : '' }} value="1">
                                            </div>
                                            @error('open')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
<label for="cuisines" >{{ __('Cuisines') }}</label>
<div class="col-sm-6">
<select id="multiple" class="js-states form-control" name="cuisine_id[]" multiple>
@foreach($cuisines as $cuisine)
@if (in_array($cuisine->id, $restaurentCuisine))
<option value="{{ $cuisine->id }}" selected="">{{ $cuisine->name}}</option>
@else
<option @if (old("cuisine_id")){{ (in_array($cuisine->id, old("cuisine_id")) ? "selected":"") }}@endif value="{{ $cuisine->id }}">{{ $cuisine->name}}</option>
@endif
@endforeach
</select>

</div>
</div>

 <div class="form-group">
            <label for="status">Status</label>                      
<select name="status" class="form-control" id="status" aria-describedby="">
<option value="" disabled>Choose an Option</option>
<option {{ old('status',$restaurent->status) == 'active'? 'selected':'' }} value="Active">Active</option>
<option {{ old('status',$restaurent->status) == 'blocked'? 'selected':'' }} value="blocked">Blocked</option>
</select>
</div>
                                               
<a class="btn " href="{{route('restaurent.index')}}" role="button"><b>Cancel</a>
<button type="submit" class="btn btn-primary"><b>Update Restaurent<b></button>
</form>
</body>
 <!-- jQuery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
      $("#multiple").select2({
          placeholder: "Select cuisines",
          allowClear: true
      });
    </script>
@endsection
</x-admin-master>