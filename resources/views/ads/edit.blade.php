@extends('layouts.app')
@section('content')

      

    <div class="container">
        
        
        <div class="row ">
            <div class="col-md-3">
                @include('sidebar')
             
             </div>
            <div class="col-md-9">
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>

                        </button>
                        @foreach ($errors->all() as $errorMessage)
                            <li>{{ $errorMessage }}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{route('ads.update',$ad->id)}}" method="post" enctype="multipart/form-data">@csrf
                        @method('PUT')        
                    <div class="card">
                        <div class="card-header text-white" style="background-color: red">
                            Update your ad.
                        </div>
                        <div class="card-body">
                            <label for="file" class="mt-2"><b>Upload 3 Images</b></label>
                            <div class="form-inline form-group mt-1">

                                <div class="col-md-4">
                                <hr>  <input type="file" class="bg-info" name="feature_image" accept="image/*" id="image1" onchange="chkFile(45)"> </hr>
                                <image-preview />

                                </div>
                                <div class="col-md-4">
                                   <hr> <input type="file" class="" name="first_image" accept="image/*"> </hr>
                                </div>
                                <div class="col-md-4">
                                 <hr>   <input type="file" class="" name="second_image" accept="image/*"> <hr>
                                </div>

                            </div>
                            <label for="file"><b>Choose category</b></label>
                            <div class="form-inline form-group mt-1">
                                <category-dropdown/>

                                <div class="col-md-4">
                                    <select class="form-control" name="category_id">
                                        <option value=""> choose category</option>
                                        @foreach(App\Models\Category::all() as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</optiosn>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="subcategory_id">
                                        <option value="">choose subcategory</option>
                                        @foreach(App\Models\SubCategory::all() as $subcategory)
                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</optiosn>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="childcategory_id">
                                        <option value="">choose childcategory</option>
                                        @foreach(App\Models\Childcategory::all() as $childcategory)
                                        <option value="{{$childcategory->id}}">{{$childcategory->name}}</optiosn>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$ad->name}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control">{{$ad->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="description">Price</label>
                                <input type="text" name="price" class="form-control" value="{{$ad->price}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Price staus</label>
                                <select class="form-control" name="price_status">
                                    <option value="negoitable" Negotiable{{$ad->price_status=="negoitable"?'selected':''}}>Negotiable></option>
                                    <option value="fixed">Fixed {{$ad->price_status=="fixed"?'selected':''}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Product Condition</label>
                                <select class="form-control" name="product_condition">
                                    <option value="">Select </option>
                                    <option value="likenew" {{$ad->product_condition=="likenew"?'selected':''}} >Looks like New</option>
                                    <option value="heavilyused" {{$ad->product_condition=="heavilyused"?'selected':''}}>Heavily Used</option>
                                    <option value="new" {{$ad->product_condition=="new"?'selected':''}}>New</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location">Listing Location</label>
                                <input type="text" class="form-control" name="listing_location" value="{{$ad->listing_location}}">
                            </div>
                            <label for="file" class="mt-2"><b>Choose address</b></label>
                            <div class="form-inline form-group mt-1">
                                <country-dropdown/>

                                <div class="col-md-4">
                                    <select class="form-control" name="country_id">
                                        <option value=""> Select country</option>
                                        @foreach(App\Models\Country::all() as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</optiosn>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="state_id">
                                        <option value="">Select state</option>
                                        @foreach(App\Models\State::all() as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</optiosn>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="city_id">
                                        <option value="">Select city </option>
                                        @foreach(App\Models\City::all() as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</optiosn>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="location">Seller contact number</label>
                                <input type="number" class="form-control" name="phone_number" value="{{$ad->phone_number}}">
                            </div>
                            <div class="form-group">
                                <label for="location">Demo link of product(ie:youtube)</label>
                                <input type="text" class="form-control" name="link" value="{{$ad->link}}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger float-right" type="submit">Update ad</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

   

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<!-- <script type="text/javascript">

 $('#image1').on('submit',function(e){
     e.preventDefault();

     let image = $('#feature_image').val();
    //  let email = $('#email').val();
    //  let mobile_number = $('#mobile_number').val();
    //  let subject = $('#subject').val();
    //  let message = $('#message').val();

     $.ajax({
       url: "/fileUpload"
       type:"POST",
       data:{
         "_token": "{{ csrf_token() }}",
         image:image,
       },
       success:function(response){
         console.log("res",response);
        //  if (response) {
        //    $('#success-message').text(response.success); 
        //    $("#contactForm")[0].reset(); 
        //  }
       },
    //    error: function(response) {
    //      $('#name-error').text(response.responseJSON.errors.name);
    //      $('#email-error').text(response.responseJSON.errors.email);
    //      $('#mobile-number-error').text(response.responseJSON.errors.mobile_number);
    //      $('#subject-error').text(response.responseJSON.errors.subject);
    //      $('#message-error').text(response.responseJSON.errors.message);
    //     }
      });
     });
   </script> -->

<script type="text/javascript">
function chkFile(file1) {
    // var file = file1.files[0];
    // var formData = new FormData();
    // formData.append('formData', file);
    let image = $('#feature_image').val();

console.log("file1",file1);
    $.ajax({
    type: "POST",
    url: "/fileUpload",    
    contentType: false,
    processData: false,
    data:{
         "_token": "{{ csrf_token() }}",
         image:image,
       },
       success:function(response){
         console.log("res",response);
        //  if (response) {
        //    $('#success-message').text(response.success); 
        //    $("#contactForm")[0].reset(); 
        //  }
       },
           error: function(response) {
        //  $('#name-error').text(response.responseJSON.errors.name);
        //  $('#email-error').text(response.responseJSON.errors.email);
        //  $('#mobile-number-error').text(response.responseJSON.errors.mobile_number);
        //  $('#subject-error').text(response.responseJSON.errors.subject);
        //  $('#message-error').text(response.responseJSON.errors.message);
        console.log("response",response);
        }
    // data: formData,
    // success: function (data) {
    //   alert(data);
    //   }
  });
}

</script>