@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create</div>

                    <div class="card-body">
                        <form method="post" action="{{url("blog")}}">
                            {{csrf_field()}}
                            <label>Name</label>
                            <input class="form-control mb-2" name="name" type="text"/>
                            <label>Title</label>
                            <input class="form-control mb-2" name="title" type="text"/>
                            <label>Content</label>
                            <input class="form-control mb-2" name="content" type="text"/>
                            <button class="btn btn-outline-primary" type="submit">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
