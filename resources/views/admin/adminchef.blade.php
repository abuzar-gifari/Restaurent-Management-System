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

        <div style="position: relative; top:30px; right: -150px;">
            <form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div>
                  <label>Name</label>
                  <input type="text" name="name" required placeholder="Enter Name" style="color: blue">
              </div>
              <div>
                  <label>Speciality</label>
                  <input type="text" name="speciality" required placeholder="Enter the speciality" style="color: blue">
              </div>
              <div>
                  <label>Image</label>
                  <input type="file" name="image" required>
              </div>
              <div>
                  <input type="submit" value="Save" style="color: black">
              </div>
            </form>
<br>
            <div>
              <table class="table table-bordered">
                <tr>
                  <th style="padding: 30px;">Name</th>
                  <th style="padding: 30px;">Speciality</th>
                  <th style="padding: 30px;">Images</th>
                  <th style="padding: 30px;">Actions</th>
                </tr>

                @foreach ($data as $data)
                  <tr align="center">
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->speciality }}</td>
                    <td>
                      <img style="height: 40px;" src="chefimage/{{ $data->image }}" alt="No image">
                    </td>
                    <td>
                      <a href="{{ url('/updatechef',$data->id) }}" class="btn btn-success">Update</a>
                      <a href="{{ url('/deletechef',$data->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>  
                @endforeach
                
              </table>        
            </div>
        </div>
        


    </div>
    


    @includeIf('admin.adminscript')
  </body>
</html>