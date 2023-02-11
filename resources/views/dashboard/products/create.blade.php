@extends('dashboard.layouts.app')
@section('content')

    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Add New Product</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">Add New Product</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
            @if(session()->get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif
            @if(session()->get('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <form action="{{route('product.store')}} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlSelect1">Category Name</label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1"
                                    value="{{old('category_id')}}">
{{--                                <option selected="selected">Choose The Product's Category</option>--}}
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Product Sku</label>
                            <input name="sku" type="text" class="form-control" aria-describedby="emailHelp"
                                   placeholder="Enter Product Name" value="{{old('sku')}}">
                            @if($errors->has('sku'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('sku') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Product Name</label>
                            <input name="name" type="text" class="form-control" aria-describedby="emailHelp"
                                   placeholder="Enter Product Name" value="{{old('name')}}">
                            @if($errors->has('name'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1">Product Description</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                      rows="3">{{old('description')}}</textarea>
                            @if($errors->has('description'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Product Price</label>
                            <input name="price" step=".01" type="number" class="form-control"
                                   aria-describedby="emailHelp"
                                   placeholder="Enter Product Price" value="{{old('price')}}">
                            @if($errors->has('price'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('price') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block" for="exampleFormControlFile1">Product Image</label>
                            <input name="image" type="file" class="form-control-file" value="{{old('image')}}">
                            @if($errors->has('image'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
