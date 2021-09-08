<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border:2px solid black;
            border-collapse: collapse;
            width:70%;
            margin: auto;
        }

        th,td{
            border:2px solid black;
            padding:5px;
            text-align: center;
        }

        th{
            background-color: darkgreen;
            color: white;
            height:30px;
        }
    </style>
</head>
<body>
    

    <x-app-layout>

    </x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @includeIf('admin.admincss')
      </head>
      <body>
        <div class="container-scroller">
            @includeIf('admin.navbar')

            <div style="position: relative; top: 30px; right: -150px;">
                <h2 class="mt-3 text-center">All Reservation Messages</h2>
                <table class="mt-3">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Message</th>
                    </tr>

                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->time }}</td>
                            <td>{{ $data->message }}</td>
                        </tr>    
                    @endforeach
                    
                </table>
            </div>

        </div>
        
        @includeIf('admin.adminscript')
      </body>
    </html>

</body>
</html>