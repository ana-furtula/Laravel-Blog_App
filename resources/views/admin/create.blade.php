@extends('layouts.admin')

@section('content')
@include('partials.errors')
<div class="row">
    <div class="col-md-12">
        <div class="border-bottom border-top border-5" style="padding: 1rem 1rem 1rem 1rem; font-family: 'Times New Roman', Times, serif; font-size: 2rem;">
            <form action="{{ route('admin.create') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" style="font-family: 'Times New Roman', Times, serif; font-size: 1.3rem;" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea style="font-family: 'Times New Roman', Times, serif; font-size: 1.3rem;" class="form-control" id="content" name="content" rows="8" cols="50"></textarea>
                </div>

                {{ csrf_field() }}
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection