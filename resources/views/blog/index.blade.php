@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <form action=""></form>
                        <table class="table table-bordered">

                            <thead>
                                <tr align="center">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Manage</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($show_index as $index)
                                    <tr align="center">
                                        <td>{{$index->id}}</td>
                                        <td>{{$index->name}}</td>
                                        <td>{{$index->title}}</td>
                                        <td>{{$index->content}}</td>
                                        <td>
                                            <form method="post" action="{{url("blog/$index->id")}}">
                                                {{csrf_field()}}
                                                @method('DELETE')
                                                <a class="btn btn-outline-info" href="{{url("blog/$index->id")}}" role="button">Show</a>
                                                <a class="btn btn-outline-success" href="{{url("blog/$index->id/edit")}}" role="button">Edit</a>
                                                <button class="btn btn-outline-danger" href="#" role="button">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
