@extends('layouts.app')

@section('content')
    <h2>All Tasks</h2>
    <a href="{{route('task.create')}}" class="btn btn-success"><i class="fa fa-plus"></i>Create new task</a>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @if(count($tasks)>0)
            @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->name}}</td>
                <td>
                    <form action="{{route('task.destroy', $task->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
                <td>
                    <form action="{{route('task.edit', $task->id) }}" method="GET">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-pencil"></i> Edit
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection