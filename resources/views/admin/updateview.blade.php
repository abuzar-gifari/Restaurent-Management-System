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

        <base href="/public">
        @includeIf('admin.admincss')
      </head>
      <body>
        <div class="container-scroller">
            @includeIf('admin.navbar')

            <div style="position: relative; top:60px; right:-150px;">

                <form action="{{ url('/update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Title</label>
                        <input style="color:blue;" type="text" name="title" required value="{{ $data->title }}">
                    </div>
                    <div>
                        <label>Price</label>
                        <input style="color:blue;" type="number" name="price" required value="{{ $data->price }}">
                    </div>
                    <div>
                        <label>Description</label>
                        <input style="color:blue;" type="text" name="description" required value="{{ $data->description }}">
                    </div>
                    <div>
                        <label>Old Image</label>
                        <img src="/foodimage/{{$data->image}}" style="height: 100px; weight: 100px;" alt="No Image">
                    </div>
                    <div>
                        <label>New Image</label><br>
                        <input type="file" name="image" required>
                    </div>
                    <div>
                        <input type="submit" value="Save" style="color: black">
                    </div>
                </form>
            </div>
        </div>
        
        @includeIf('admin.adminscript')
      </body>
    </html>


</body>
</html>