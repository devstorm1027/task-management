@extends('layout.template')
@section('content')

    <h1>Update Task</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($task, ['method' => 'PATCH','route'=>['tasks.update',$task->id]]) !!}
    <div class="form-group">
        {!! Form::label('Name', 'Task Name:') !!}
        {!! Form::text('name',null,['class'=>'input-task-name form-control']) !!}
    </div>
    <div class="form-group">
        <label>Due Date: <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></label>
        <div class='input-group date' id='datepicker'>
            <input type='text' class="duedate form-control" name="duedate" value="{{$task->duedate}}">
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>

    <div class="form-group">
        <div class='col-sm-2 submit-btn'>
            {!! Form::submit('Update Task', ['class' => 'btn btn-success form-control']) !!}
            {!! Form::close() !!}
        </div>
        <div class='col-sm-2 submit-btn'>
            {!! Form::open(['method' => 'DELETE', 'route'=>['tasks.destroy', $task->id], 'id' => 'deleteForm']) !!}
            {!! Form::submit('Delete Task', ['class' => 'btn btn-danger deleteTask', 'id' => 'deleteTask']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
    
    
    <div id="confirm" class="modal fade">
        <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    Are you sure ?
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Yes</button>
                    <button type="button" data-dismiss="modal" class="btn">No</button>
                </div>
            </div>
        </div>
    </div>

@stop