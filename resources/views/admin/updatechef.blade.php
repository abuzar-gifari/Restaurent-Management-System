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

        <form action="{{ url('/updatefoodchef',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Name</label>
                <input style="color: blue;" type="text" name="name" value="{{ $data->name }}">
            </div>
            <div>
                <label>Speciality</label>
                <input style="color: blue;" type="text" name="speciality" value="{{ $data->speciality }}">
            </div>
            <div>
                <label>Old Image</label>
                <img style="height:60px;" src="chefimage/{{ $data->image }}" alt="No image">
            </div>
            <div>
                <label>New Image</label>
                <input type="file" name="image">
            </div>
            <div>
                <input type="submit" value="Save">
            </div>
        </form>
    </div>
    
    @includeIf('admin.adminscript')
  </body>
</html>