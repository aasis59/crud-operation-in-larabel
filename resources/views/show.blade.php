@extends('layouts.master')
@section('content')

<div class="mian-content">
    <div class="card">
        <div class="card-header">
            Show post
            <div class=" d-flex justify-content-end">
                <a class="btn-sm btn-success" href="{{ route('posts.create') }}">Create</a>
                <a class="btn-sm btn-warning" href="">Trashed</a>
               </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">

                <tbody>
              {{--
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
                            <a  class="btn-sm btn-success" href="">Show</a>
                            <a class="btn-sm btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            <a class="btn-sm btn-danger" href="">Delete</a>

                        </td>

                      </tr> --}}

                      <tr>
                        <td>
                            ID
                        </td>
                        <td>
                            {{ $posts->id }}
                        </td>
                      </tr>

                      <tr>
                        <td>
                            Image
                        </td>
                        <td>
                            <img src="{{ asset($posts->image) }}" alt="" style="width: 300px">
                        </td>
                      </tr>
                      <tr>
                        <td>
                            Title
                        </td>
                        <td>
                            {{ $posts->title}}
                        </td>
                      </tr>
                      <tr>
                        <td>
                            Description
                        </td>
                        <td>
                            {{ $posts->description}}
                        </td>
                      </tr>
                      <tr>
                        <td>
                            category
                        </td>
                        <td>
                            {{ $posts->category_id}}
                        </td>
                      </tr>
                      <tr>
                        <td>
                            Published Date
                        </td>
                        <td>
                            {{ date('d-m-Y',strtotime($posts->created_at))}}
                        </td>
                      </tr>





                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection
