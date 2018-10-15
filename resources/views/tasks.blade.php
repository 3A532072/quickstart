@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
    @if (count($tasks) > 0)
               <!-- 表單錯誤清單 -->
    <div class="alert alert-danger">
        <strong>哎呀！出了些問題！</strong>
        <br><br>
        <ul>
            <tbody>
                @foreach ($errors->all() as $error)
                    <tr>
                        <!-- 任務名稱 -->
                        <td class="table-text">
                            <div>{{ $task->name }} </div>
                        </td>
                        <td>
                            <!-- 代辦：刪除按鈕 -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </ul>
    </div>  
    @endif

@endsection