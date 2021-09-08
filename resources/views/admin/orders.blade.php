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

        <div class="container">
            <h1>Customer Address</h1>

            <form action="{{ url('/search') }}" method="GET">
                @csrf
                <input type="text" name="search" style="color:blue;">
                <input type="submit" value="Search" class="btn btn-success">
            </form>
    
            <table>
                <tr>
                    <th style="padding:30px;">Customer Name</th>
                    <th style="padding:30px;">Customer phone</th>
                    <th style="padding:30px;">Customer address</th>
                    <th style="padding:30px;">Food Name</th>
                    <th style="padding:30px;">Food Price</th>
                    <th style="padding:30px;">Food Quantity</th>
                    <th style="padding:30px;">Total Price</th>
                </tr>
                @foreach ($data as $data)
                    <tr align="center" style="background-color: blue;">
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->foodname }}</td>
                        <td>{{ $data->price }}$</td>
                        <td>{{ $data->quantity }}</td>
                        <td>{{ $data->price * $data->quantity }}$</td>
                    </tr>
                @endforeach
            </table>
        </div>
        
    </div>
    
    @includeIf('admin.adminscript')
  </body>
</html>