@extends('layouts.master')
@section('content')

<div class="mian-content">
    <div class="card">
        <div class="card-header">
            All post
            <div class=" d-flex justify-content-end">
                <a class="btn-sm btn-success" href="{{ route('posts.create') }}">Create</a>
                <a class="btn-sm btn-warning" href="">Trashed</a>
               </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">
                <thead style="background: #f2f2f2">
                  <tr>
                    <th scope="col" >#</th>
                    <th scope="col">Image</th>
                    <th scope="col" style="width:10%">Title</th>
                    <th scope="col" style="width:30%">Description</th>
                    <th scope="col" style="width:10%">Category</th>
                    <th scope="col" style="width:10%"> Publish Date</th>
                    <th scope="col" style="width:10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="https://picsum.photos/200" alt="" width="80px">
                    </td>
                    <td>Lorem ipsum dolor dolor perferendis vel, eum quod?</td>
                    <td>Lorem ipsue eum labore quisquam officiis doloribus ratioriatur?</td>
                    <td>News</td>
                    <td>2-5-23</td>
                    <td>
                        <a  class="btn-sm btn-success" href="">Show</a>
                        <a class="btn-sm btn-primary" href="">Edit</a>
                        <a class="btn-sm btn-danger" href="">Delete</a>

                    </td>

                  </tr>

                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection
