<x-admin-master>
    @section('content')

    <head>
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyA6gEfQ--K1SIz2Zj8CRzWHUiK68bSEDXY"></script>

    <h1>Create Restaurent:</h1>

    <form method="post" action="{{route('addrestaurent.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control
            @error('name') is-invalid @enderror" id="name" aria-describedby="" placeholder="Enter name">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="about">About</label>
            <textarea name="about" class="form-control @error('about') is-invalid @enderror" id="about" aria-describedby="" placeholder="about"></textarea>
            @error('about')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="adress">Adress</label>
            <textarea name="adress" class="form-control @error('adress') is-invalid @enderror" id="adress" aria-describedby="" placeholder="Enter adress"></textarea>
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
    <label>Location:</label>
    <input type="text" name="location" class="form-control" id="search_input" placeholder="Type address..." />
    <input type="hidden" id="loc_lat" />
    <input type="hidden" id="loc_long" />
</div>

        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" name="logo" class="form-control-file" id="logo">
        </div>


        <div class="form-group">
            <label for="banner">Banner</label>
            <input type="file" name="banner" class="form-control-file" id="banner">
        </div>



        <div class="form-group">
            <label for="minvalue">Minimum Order Value</label>
            <input type="text" name="minvalue" class="form-control @error('minvalue') is-invalid @enderror" id="minvalue" aria-describedby="" placeholder="Enter minmum order value">
            @error('minvalue')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="cost">Cost for two people</label>
            <input type="text" name="cost" class="form-control @error('cost') is-invalid @enderror" id="cost" aria-describedby="" placeholder="Enter cost">
            @error('cost')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="time">Default prepartion time</label>
            <input type="text" name="time" class="form-control @error('time') is-invalid @enderror" id="time" aria-describedby="" placeholder="Default prepartion time">
            @error('time')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
          <div class="form-group row">
            <label for="addcuisine_id" class="">{{ __('Cuisines') }}</label>
            <div class="col-sm-6">
        <select id="multiple" class="js-states form-control" name="addcuisine_id" multiple>
                    @foreach($addcuisines as $addcuisine)
                    <option value="{{ $addcuisine->id }}">{{ $addcuisine->name }}</option>
                    @endforeach
                </select>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>  
        
        




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
            <input type="email" name="billing" class="form-control @error('billing') is-invalid @enderror" id="billing" aria-describedby="" placeholder="Billing email">
            @error('billing')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" id="mobile" aria-describedby="" placeholder="Enter Number">
            @error('mobile')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create restaurent</b></button>

        <button class="btn btn-primary">Create and add another</button>

    </form>
<script>
var searchInput = 'search_input';

$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
	
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();
		
        document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
        document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
    });
});
</script>

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