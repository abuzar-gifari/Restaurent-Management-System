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

            <div style="position: relative; top:60px; right:-150px;">

                <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Title</label>
                        <input style="color:blue;" type="text" name="title" required placeholder="Write a Title">
                    </div>
                    <div>
                        <label>Price</label>
                        <input style="color:blue;" type="number" name="price" required>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div>
                        <label>Description</label>
                        <input style="color:blue;" type="text" name="description" required placeholder="Write a Description">
                    </div>
                    <div>
                        <input type="submit" value="Save" style="color: black">
                    </div>
                </form>

                <div>
                    <table style="background-color: black">
                        <tr>
                            <th style="padding: 30px;">Food Name</th>
                            <th style="padding: 30px;">Food Price</th>
                            <th style="padding: 30px;">Food Description</th>
                            <th style="padding: 30px;">Food Image</th>
                            <th style="padding: 30px;">Action</th>
                            <th style="padding: 30px;">Action2</th>
                        </tr>

                        @foreach ($data as $data)
                        <tr align="center">
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->description }}</td>
                            <td><img style="height: 50px;" src="/foodimage/{{ $data->image }}" alt="No Image"></td>
                            <td><a href="{{ url('/deletemenu',$data->id) }}" style="btn btn-success">Delete</a></td>
                            <td><a href="{{ url('/updateview',$data->id) }}" style="btn btn-success">Update</a></td>
                        </tr>    
                        @endforeach
                        
                    </table>
                </div>


            </div>

        </div>
        
        @includeIf('admin.adminscript')
      </body>
    </html>

</body>
</html>