<x-admin-master>
    @section('content')
        <h1>Create Restaurent:</h1>

                <form method="post" action="{{route('addrestaurent.store')}}" enctype="multipart/form-data">
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
                        <div class="form-group">
                            <label for="about">About</label>
                                <textarea
                                       name="about"
                                       class="form-control @error('about') is-invalid @enderror"
                                       id="about"
                                       aria-describedby=""
                                       placeholder="about"></textarea>
                                       @error('about')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        <div class="form-group">
                            <label for="adress">Adress</label>
                            <textarea
                                       name="adress"
                                       class="form-control @error('adress') is-invalid @enderror"
                                       id="adress"
                                       aria-describedby=""
                                       placeholder="Enter adress"></textarea>
                                       @error('adress')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group row">
    <label for="addcity_id" class="">{{ __('City') }}</label>
                                       
     <div class="col-sm-6">
    <select class="form-control" name="addcity_id">
     <option selected disabled>{{ __('Select') }}</option>
    @foreach($addcities as $addcity)
    <option value="{{ $addcity->id }}">{{ $addcity->name }}</option>
    @endforeach
     </select>
    @error('name')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
     @enderror
     </div>
     </div>

     <div class="form-group row">
    <label for="addzone_id" class="">{{ __('Zone') }}</label>
                                       
     <div class="col-sm-6">
    <select class="form-control" name="addzone_id">
     <option selected disabled>{{ __('Select') }}</option>
    @foreach($addzones as $addzone)
    <option value="{{ $addzone->id }}">{{ $addzone->name }}</option>
    @endforeach
     </select>
    @error('name')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
     @enderror
     </div>
     </div>

            <div class="form-group">
                            <label for="location">Location</label>
                                <input type="text"
                                       name="location"
                                       class="form-control @error('location') is-invalid @enderror"
                                       id="txtPlaces" style="width: 250px"
                                       aria-describedby=""
                                       placeholder="Enter location">
                                       @error('location')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-group">
                                <label for="logo">Logo</label>
                                <input type="file"
                                       name="logo"
                                       class="form-control-file"
                                       id="logo">
                        </div>


                        <div class="form-group">
                                <label for="banner">Banner</label>
                                <input type="file"
                                       name="banner"
                                       class="form-control-file"
                                       id="banner">
                        </div>

                       

                        <div class="form-group">
                            <label for="minvalue">Minimum Order Value</label>
                                <input type="text"
                                       name="minvalue"
                                       class="form-control @error('minvalue') is-invalid @enderror"
                                       id="minvalue"
                                       aria-describedby=""
                                       placeholder="Enter minmum order value">
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
                                       placeholder="Enter cost">
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
                                       placeholder="Default prepartion time">
                                       @error('time')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror       
        </div>
        
        
        <div class="form-group row">
    <label for="addzone_id" class="">{{ __('Cuisine') }}</label>                                  
     <div class="col-sm-6">
    <select class="form-control" name="addcuisine_id">
     <option selected disabled>{{ __('Select') }}</option>
    @foreach($addcuisines as $addcuisine)
    <option value="{{ $addzone->id }}">{{ $addcuisine->name }}</option>
    @endforeach
     </select>
    @error('name')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
     @enderror
     </div>
     </div>


     <!-- <div class="form-group row">
                                <label for="addcuisine">{{ __('Cuisines') }}</label>
                                <div class="col-sm-6">
                                    <select multiple="multiple" class="js-example-basic-multiple select2 form-control @error('addcuisine_id') is-invalid @enderror" name="addcuisine_id[]">
                                        @foreach($addcuisines as $addcuisine)
                                        <option @if (old("addcuisine_id")){{ (in_array($addcuisine->id, old("addcuisine_id")) ? "selected":"") }}@endif value='{{ $addcuisine->id }}'>{{ $addcuisine->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('addcuisine_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>The cuisine field is required.</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> -->



<div class="form-group ">
 <div class="form-check  @error('is_open') is-invalid @enderror">
<input type="checkbox" id="is_open" name="is_open" value="1">
<label class="form-check-label">Is Open</label>
</div>
@error('is_open')
<span class="error invalid-feedback">{{ $message }}</span>
 @enderror
</div>

<div class="form-group ">
 <div class="form-check  @error('pickup') is-invalid @enderror">
<input type="checkbox" id="pickup" name="pickup" value="1">
<label class="form-check-label">Allow Pickup</label>
</div>
@error('pickup')
<span class="error invalid-feedback">{{ $message }}</span>
 @enderror
</div>

<div class="form-group ">
 <div class="form-check  @error('open') is-invalid @enderror">
<input type="checkbox" id="open" name="open" value="1">
<label class="form-check-label">24x7 Open</label>
</div>
@error('open')
<span class="error invalid-feedback">{{ $message }}</span>
 @enderror
</div>

<div class="form-group">
                            <label for="billing">Billing Email</label>
                                <input type="email"
                                       name="billing"
                                       class="form-control @error('billing') is-invalid @enderror"
                                       id="billing"
                                       aria-describedby=""
                                       placeholder="Billing email">
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
                                       placeholder="Enter Number">
                                       @error('mobile')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Create restaurent</b></button>

                        <button  class="btn btn-primary">Create and add another</button>

                </form>
                <html xmlns="http://www.w3.org/1999/xhtml">
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCtpnS2gv30FdPqAlGHcVHCutDnldDKV2s"></script>

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('txtPlaces'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
                alert(mesg);
            });
        });
    </script>
               
    @endsection
    
</x-admin-master>