@extends('layouts.admin')

@section('content')

@if(Session::has('info'))
<div class="row">
    <div class="col-md-12">
        <p class="alert alert-info">{{ Session::get('info') }}</p>
    </div>
</div>
@endif
<div class="float-end" style="padding:1rem 0rem 1rem 0rem">
    <div class="col-md-12">
        <a href="{{ route('admin.create') }}" class="btn btn-primary">New Post</a>
    </div>
</div>

<table class="table">
    <thead style="background-color: rgb(153, 204, 255);">
        <tr>
            <th scope="col">POST NAME</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td><strong>{{ $post->title }}</strong></td>
            <td>
                <a href="{{ route('admin.edit', ['id' => $post->id]) }}">
                    <i class="bi bi-pencil-square" style="color: cornflowerblue; font-size: 1.5rem " title="Edit"></i>
                </a>
            </td>
            <td>
                <a href="{{ route('admin.delete', ['id' => $post->id]) }}">
                    <i class="bi bi-x-circle-fill" style="color: red; font-size: 1.5rem " title="Delete"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection