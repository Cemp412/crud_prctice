@extends('layouts.master')

    <div class="d-flex align-content-center flex-wrap">

         <div class="container">
         	<h3 class="d-flex align-content-center">Register Here</h3>
    	     <br/>
    	     <div class="row">
    	     <div class="col-md-6">
             <div class="form-group">
	             <form method="post" enctype="multipart/form-data" action="{{url('/crud')}}">
		           {{csrf_field()}}
                     <div class="form-group">
                         <label class="form-control-label">Name</label><br/>
		                     <input class="form-control" type="text" name="name" placeholder="Must written in Capital letters">
	                 </div>
		            <br/>
        
                     <div class="form-group">
		                 <label class="form-control-label">Email</label><br/>
		                 <input class="form-control" type="email" name="email" placeholder="fill your email">
	                 </div>
		             <br/>


		             <div class="form-group">
		             	  <label class="form-control-label">Mobile No.</label>
		             	 <input  class="form-control" type="number" name="mobileno" validation="number">
		             </div>
		             <br/>

                      <div class="form-group">
		                  <label class="form-control-label">Gender</label><br/>
		                  <input class="form-group" type="radio" name="gender" value="male">Male
		                  <input class="form-group" type="radio" name="gender" value="female">Female
	                  </div>
		              <br/>
        
                      <div class="form-group">
		                 <label class="form-control-label">Qualification</label><br/>
		                 <input class="form-group" type="checkbox" name="qualification[]" value="M.tech">M.tech
		                 <input class="form-group" type="checkbox" name="qualification[]" value="B.tech">B.tech
		                 <input class="form-group" type="checkbox" name="qualification[]" value="BCA">BCA
		                 <input class="form-group" type="checkbox" name="qualification[]" value="MCA">MCA
	                  </div>
                      <br/>


                      <div class="form-group">
                      	 <label class="form-control-label">Address</label>
        	             <input class="form-control" type="textarea" name="address">
        	           </div>
        	           <br/>


        	           <div class="form-group">
                      	 <label class="form-control-label">Upload a picture(image)</label>
        	             <input class="form-control" type="file" name="image">
        	           </div>
        	           <br/>

        	          <div class="card-footer">
        	          	<input type="submit" name="submit" class="btn btn-warning btn-sm d-flex">
        	          </div>


	</form>
</div>
</div>

	</div>
</div>
</div>

</body>
</html>