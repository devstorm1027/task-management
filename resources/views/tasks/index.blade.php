@extends('layout/template')

@section('content')
 <h1>View All Tasks</h1>
 
 @if(!$tasks->isEmpty())
 <hr>
 <table id='dtBasicExample' class="table table-striped table-bordered table-hover" style="width:100%">
     <thead>
     <tr class="bg-info">
         <th>Task Name<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
         <th>Due Date<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
         <th>Completed<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
     </tr>
     </thead>
     <tbody>
     @foreach ($tasks as $task)
        <tr>
            <td class='task-name' id="{{$task->id}}" >
                <a href="{{route('tasks.edit',$task->id)}}" class='edit-link' id="{{ $task->status }}">
                    {{ $task->name }}
                </a>
            </td>
            <td>{{ $task->duedate }}</td>
            <td>
            <div class="checkbox">
                <label><input type="checkbox" @if($task->status==1)
                checked @endif id="{{$task->id}}"></label>
              </div>
            </td>
        </tr>
    
     @endforeach
     </tbody>
 </table>
@else
<h3>There are no tasks. Please Create Task.</h3>
@endif
<script>
    
    $('.task-name').click(function(){
        task_id = $(this).attr('id')
        id = $(this).children().attr('id');
        if (id == 1){
            $(this).children().prop('href', '#')
        }else{
            $(this).children().prop('href', 'http://localhost:8000/tasks/'+task_id+'/edit')
        }
    })

</script>
@endsection

