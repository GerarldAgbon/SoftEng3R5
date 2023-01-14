<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <table>
                    <tr style="background-color:grey">
                        <td style="padding:20px">Customer Name</td>
                        <td style="padding:20px">Phone</td>
                        <td style="padding:20px">Address</td>
                        <td style="padding:20px">Title</td>
                        <td style="padding:20px">Price</td>
                        <td style="padding:20px">Location</td>
                        <td style="padding:20px">Status</td>
                        <td style="padding:20px">Action</td>
                    </tr>
                    @foreach($order as $orders)
                    <tr align="center" style="background-color:black;">
                        <td style="padding:20px">{{$orders->name}}</td>
                        <td style="padding:20px">{{$orders->phone}}</td>
                        <td style="padding:20px">{{$orders->address}}</td>
                        <td style="padding:20px">{{$orders->title}}</td>
                        <td style="padding:20px">{{$orders->price}}</td>
                        <td style="padding:20px">{{$orders->location}}</td>
                        <td style="padding:20px">{{$orders->status}}</td>
                        <td style="padding:20px">
                            <a class="btn btn-success" href="{{url('updatestatus', $orders->id)}}">Confirm</a>
                        </td>
                    </tr>
                    @endforeach
                </table>


            </div>
          </div>
      @include('admin.script')
  </body>
</html>
