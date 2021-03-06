<!DOCTYPE html>
<html>
    <head>
        <title>Tasks</title>
        <link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}"/>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    <p><a href="{{url('/tasks/create')}}" >Add New Task</a></p>
                    <p><a href="{{url('/tasks')}}">View Tasks</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
