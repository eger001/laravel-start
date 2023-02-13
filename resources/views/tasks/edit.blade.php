@extends('layouts.app')

@section('content')
    <h2>Edit Task</h2>
    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
        @include('common.errors')

        <!-- Форма новой задачи -->
        <form action="{{ route('task.update', $task->id) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <!-- Имя задачи -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">New task name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="{{$task->name}}">
                </div>
            </div>

            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-pencil"></i> Edit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection