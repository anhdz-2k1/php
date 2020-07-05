<?php
?>
{{--thua ke tu apple.blade template--}}
@extends('layouts.app')

{{--Noi dung trang con--}}
{{--dung app.css--}}
@section('content')
    {{--dinh nghix noi dung trang task--}}
    <div class="panel-body">
        {{--Hien thi thong bao loi--}}
        @include('erroes.503')

        {{--form nhap tassk moi--}}
        <form action="{{url('task')}}" method="post" class="form-horizontal">
            {{csrf_field()}}

            {{--ten task--}}
            <div class="form_group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

         {{--nut task--}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add task
                    </button>
                </div>
            </div>
        </form>

        {{--        Hien thi Task hien tai co trong db--}}
        @if(count($tasks)>0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Task
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        {{--                        Tao tieu de cua cac cot--}}
                        <thead>
                        <td>Task</td>
                        <td>&nbsp;</td>
                        </thead>
                        {{--                        Tao cac dong de hien thi noi dung--}}
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                {{--                                    Hien thi ten TASK--}}
                                <td class="table-text">
                                    <div>{{$task->name}}</div>
                                </td>
                                {{--                                    Them nut xoa--}}
                                <td>
                                    <form action="task/{{$task->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button>Delete Task</button>
                                        {{--<input type="hidden" name="_method" value="DELETE">--}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

    </div>
@endsection
