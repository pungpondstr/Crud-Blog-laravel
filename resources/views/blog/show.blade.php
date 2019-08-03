@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show</div>

                    <div class="card-body">
                        <label>ID</label>
                        <input class="form-control mb-2" name="name" type="text" value="{{$show_id->id}}" readonly/>

                        <label>Name</label>
                        <input class="form-control mb-2" name="name" type="text" value="{{$show_id->name}}" readonly/>

                        <label>Title</label>
                        <input class="form-control mb-2" name="title" type="text" value="{{$show_id->title}}" readonly/>

                        <label>Content</label>
                        <input class="form-control mb-2" name="content" type="text" value="{{$show_id->content}}" readonly/>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
