@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
         
        <h3>Add ChildCategory</h3>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    

                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample" action="{{route('childcategory.store')}}" method="post" > @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="name of childcategory">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Choose subcategory</label>
                                <select class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id">

                                <option value="">Select category</option>
                                @foreach(App\Models\SubCategory::all() as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>

                                @endforeach
                                </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>

                         
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


          
                </div>
             </div>
         </div>
  </div>
</div>

@endsection