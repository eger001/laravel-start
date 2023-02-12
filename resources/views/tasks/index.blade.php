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
                    {{--TODO delete button --}}
                </td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection