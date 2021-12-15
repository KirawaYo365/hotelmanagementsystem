<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
        
        label{
            display: inline-block;
            width: 200px;
        }

    </style>

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
            
            <div class="container" style="padding-top: 100px">

                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}


                </div>

                @endif
                
                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px">
                        <label for="">Doctor's Name</label>
                        <input type="text" style="color: black;" name="name" placeholder="Write the name" required="">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Phone</label>
                        <input type="number" style="color: black;" name="number" placeholder="Write the number" required="">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Speciality</label>

                        <select name="speciality" id="speciality" style="color: black; width:213px" required="">

                            <option value="">--Select--</option>
                            <option value="surgery">Surgery</option>
                            <option value="padiatrics">Pediatrics</option>
                            <option value="dermatology">Dermatology</option>
                            {{-- <option value="internal">Internal Medicine</option>
                            <option value="gynaecology">Gynaecology</option>
                            <option value="emergency">Emergency Medicine</option>
                            <option value="family">Family Medicine</option> --}}
                            <option value="radiology">Radiology</option>
                            <option value="cardiology">Cardiology</option>
                            <option value="dental">Dental</option>

                        </select>
                    </div>

                    <div style="padding: 15px">
                        <label for="">Room No.</label>
                        <input type="text" style="color: black;" name="room" placeholder="Write the room number" required="">
                    </div>
                 
                    <div style="padding: 15px">
                        <label for="">Doctor's Image</label>
                        <input type="file" name="file" required="">
                    </div>
                
                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>

            </div>

        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>