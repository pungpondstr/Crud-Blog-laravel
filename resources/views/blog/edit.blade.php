@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>

                    <div class="card-body">
                        <form method="post" action="{{url("blog/$edit_id->id")}}">
                            {{csrf_field()}}
                            @method('PATCH')
                            <label>Name</label>
                            <input class="form-control mb-2" name="name" type="text" value="{{$edit_id->name}}"/>

                            <label>Title</label>
                            <input class="form-control mb-2" name="title" type="text" value="{{$edit_id->title}}"/>

                            <label>Content</label>
                            <input class="form-control mb-2" name="content" type="text" value="{{$edit_id->content}}"/>

                            <button class="btn btn-outline-primary" type="submit">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
