<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            width: 70%;
            margin:auto;
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

            <div class="container-fluid" style="">
                <h2 class="text-center">Enter Food Information</h2>
                <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input class="form-control" style="color:blue;" type="text" name="title" required placeholder="Write a Title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input class="form-control"  style="color:blue;" type="number" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input class="form-control"  type="file" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input class="form-control"  style="color:blue;" type="text" name="description" required placeholder="Write a Description">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-success" type="submit" value="Save" style="color: black">
                    </div>
                </form>


                <br><br><br>
                <div class="mb-3 ml-3">
                    <h2 class="text-center">All Food's List</h2>
                    <table style="background-color: black" class="text-center">
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