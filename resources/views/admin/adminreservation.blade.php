<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                <table style="bgcolor:grey; border: 1px; ">
                    <tr>
                        <th style="padding: 30px;">Name</th>
                        <th style="padding: 30px;">Email</th>
                        <th style="padding: 30px;">Phone</th>
                        <th style="padding: 30px;">Date</th>
                        <th style="padding: 30px;">Time</th>
                        <th style="padding: 30px;">Message</th>
                    </tr>

                    @foreach ($data as $data)
                        <tr align="center">
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