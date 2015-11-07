@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

                <!-- New Task Form -->
        <form action="/todo" method="POST" id="create" class="form-horizontal">
            {{ csrf_field() }}

                    <!-- Task Name -->
            <div class="form-group">
                <label for="todo" class="col-sm-3 control-label">Todo</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="todo" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" form="create" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Todo
                    </button>
                </div>
            </div>
        </form>
    </div>
@if (count($todos) > 0)
<div class="row">
    <div class="col-md-12">
        <ul class="list-group">
            @foreach($todos as $key=>$todo)
            <li class="list-group-item">
                <form id="delete_{{$todo->id}}" class="form-inline" action="/todo/{{ $todo->id }}" method="POST">
                    <div class="form-group">
                        <p><a href="/todo/{{$todo->id}}">{{$todo->title}}</a></p>
                    </div>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button form="delete_{{$todo->id}}" type="submit" value="Submit" class="btn btn-sm btn-danger pull-right">Delete</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif

@endsection