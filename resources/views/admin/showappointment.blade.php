<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
        
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div style="padding-top: 100px" align="center">
                <table>
                    <tr style="background-color: black">
                        <th style="padding: 10px">Customer Name</th>
                        <th style="padding: 10px">Email</th>
                        <th style="padding: 10px">Phone</th>
                        <th style="padding: 10px">Doctor's Name</th>
                        <th style="padding: 10px">Date</th>
                        <th style="padding: 10px">Message</th>
                        <th style="padding: 10px">Status</th>
                        <th style="padding: 10px">Apporoved</th>
                        <th style="padding: 10px">Cancelled</th>
                    </tr>

                    @foreach ($data as $appoint)
                    
                    <tr style="background-color: darkcyan">
                        <td style="padding: 10px">{{ $appoint->name }}</td>
                        <td style="padding: 10px">{{ $appoint->email }}</td>
                        <td style="padding: 10px">{{ $appoint->phone }}</td>
                        <td style="padding: 10px">{{ $appoint->doctor }}</td>
                        <td style="padding: 10px">{{ $appoint->date }}</td>
                        <td style="padding: 10px">{{ $appoint->name }}</td>
                        <td style="padding: 10px">{{ $appoint->status }}</td>

                        <td>

                            <a class="btn btn-success" href="{{ url('approved',$appoint->id) }}">Approved</a>

                        </td>

                        <td>

                            <a class="btn btn-danger" href="{{ url('cancelled', $appoint->id) }}">Cancelled</a>

                        </td>
                    </tr>

                    @endforeach

                </table>
            </div>
        </div>
      </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>