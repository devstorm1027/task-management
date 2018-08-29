@extends('layout.template')
@section('content')

    <h1>Add a New Task...</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['action'=>'TaskController@store']) !!}
    <div class="form-group">
        {!! Form::label('Task Name', 'Task Name:') !!}
        {!! Form::text('name',null,['class'=>'input-task-name form-control']) !!}
    </div>
    <div class="form-group">
        <label>Due Date <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></label>
        <div class='input-group date' id='datepicker'>
            <input type='text' class="duedate form-control" name="duedate">
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>

    <div class="form-group">
        <div class='col-sm-2 submit-btn'>
            {!! Form::submit('Add Task', ['class' => 'btn btn-success form-control']) !!}
        </div>
    </div>

    {!! Form::close() !!}
@stop
