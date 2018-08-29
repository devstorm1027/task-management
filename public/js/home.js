$(document).ready(function() {
    // Sorting Table
    $('#dtBasicExample').DataTable({
        "iDisplayLength": -1,
        "aaSorting": [[ 1, "asc" ]],
        "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
    });

    // Print Date Picker
    $(function() {
        $('#datepicker').datetimepicker( {
            defaultDate:'now',  
            format: 'MM/DD/YYYY',
        });
    });

    // Delete Action for each Task
    $('.deleteTask').click(function(e){
        e.preventDefault();

        $('#confirm').modal('show').one('click', '#delete', function (e){
            $('#deleteForm').submit();
        });

    }); 

    // Checkbox for each Task
    $('.checkbox input').click(function(){
        id = $(this).attr('id');
        status = 0
        
        if ($(this).prop('checked'))
            status = 1
        
        $.ajax({
            url: '/tasks/'+id+'/ajaxupdate',
            type: 'GET',
            data: {
                status: status
            },
            success: function(data){
            }
        })
    });

    $('.checkbox input').change(function() {
        id = $(this).attr('id');
        status = $('td#' + id + ' a').attr('id')
        status = 1 - status;
        $('td#' + id + ' a').attr('id', status);
    })
});