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
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>
                            <img src="{{ asset($post->image) }}" alt="" width="80px">
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description}}</td>
                        <td>{{ $post->category_id}}</td>
                        <td>{{ date('d-m-Y',strtotime($post->created_at)) }}</td>
                        <td>
                            <a  class="btn-sm btn-success" href="{{route('posts.show',$post->id)}}">Show</a>
                            <a class="btn-sm btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn-sm btn-danger mt-2">Delete</button>

                            </form>

                        </td>

                      </tr>
                    @endforeach


                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection
