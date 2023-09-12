@extends('layouts.master')
@section('content')

<div class="main-content">
    <div class="card">
        <div class="card-header">
           <h4>Create Post</h4>
           <div class=" d-flex justify-content-end">
            <a class="btn-sm btn-success" href="">Back</a>

           </div>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>

            @endforeach


        @endif
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"  >
                @csrf

                <div class="form-group">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" >
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" >
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">select</option>

                       @foreach ($categories as $category)
                           <option value="{{ $category->id  }}">{{ $category->name }}</option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group mt-3">
                     <button class="btn btn-primary">submit</button>
                </div>
            </form>



        </div>
    </div>
</div>



@endsection
