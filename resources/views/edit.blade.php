@extends('layouts.master')
@section('content')

<div class="mian-content">
    <div class="card">
        <div class="card-header">
           <h4>Edit Post</h4>
           <div class=" d-flex justify-content-end">
            <a class="btn-sm btn-success" href="">Back</a>

           </div>
        </div>
        <div class="card-body">
            <form action="" >

                <div class="form-group">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control" name="" >
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" name="" >
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <select name="" id="" class="form-control">
                        <option value="">test1</option>
                        <option value="">test2</option>
                        <option value="">test3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group mt-3">
                     <button class="btn btn-primary">submit</button>
                </div>
            </form>


        </div>
    </div>
</div>


@endsection
