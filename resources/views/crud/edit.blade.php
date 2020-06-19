@extends('layouts.master')

    <div class="d-flex align-content-center flex-wrap">

         <div class="container">
         	<h3 class="d-flex align-content-center">Register Here</h3>
    	     <br/>
    	     <div class="row">
    	     <div class="col-md-6">
             <div class="form-group">
	             <form method="post" enctype="multipart/form-data" action="{{url('/crud/update')}}">
		           {{csrf_field()}}
		           <input type="hidden" name="id" value="{{$crud->id}}">
                     <div class="form-group">
                         <label class="form-control-label">Name</label><br/>
		                     <input class="form-control" type="text" name="name" placeholder="Must written in Capital letters" value="{{$crud->name}}">
	                 </div>
		            <br/>
        
                     <div class="form-group">
		                 <label class="form-control-label">Email</label><br/>
		                 <input class="form-control" type="email" name="email" placeholder="fill your email" value="{{$crud->email}}">
	                 </div>
		             <br/>


		             <div class="form-group">
		             	  <label class="form-control-label">Mobile No.</label>
		             	 <input  class="form-control" type="number" name="mobileno" validation="number" value="{{$crud->mobileno}}">
		             </div>
		             <br/>

                      <div class="form-group">
		                  <label class="form-control-label">Gender</label><br/>
		                  <input class="form-group" type="radio" name="gender" value="male" @if($crud->gender =='male')checked @endif>Male
		                  <input class="form-group" type="radio" name="gender" value="female" @if($crud->gender == 'female')checked @endif>Female
	                  </div>
		              <br/>
        
                      <div class="form-group">
		                 <label class="form-control-label">Qualification</label><br/>
		                 <input class="form-group" type="checkbox" name="qualification[]" value="M.tech" @if(strpos($crud->qualification, 'M.tech')!== false)checked @endif>M.tech
		                 <input class="form-group" type="checkbox" name="qualification[]" value=" B.tech" @if(strpos($crud->qualification, 'B.tech')!== false)checked @endif>B.tech
		                 <input class="form-group" type="checkbox" name="qualification[]" value="BCA" @if(strpos($crud->qualification, 'BCA') !== false)checked @endif>BCA
		                 <input class="form-group" type="checkbox" name="qualification[]" value="MCA" @if(strpos($crud->qualification, 'MCA') !== false)checked @endif>MCA
	                  </div>
                      <br/>


                      <div class="form-group">
                      	 <label class="form-control-label">Address</label>
        	             <input class="form-control" type="textarea" name="address" value="{{$crud->address}}">
        	           </div>
        	           <br/>


        	           <div class="form-group">
                      	 <label class="form-control-label">Upload a picture(image)</label>
        	             <input class="form-control" type="file" name="image" value="{{asset('$crud->image')}}">
                             <input type="hidden" name="current_image" value="{{$crud->image}}">
                                 @if(!empty($crud->image))
                                 <img src="{{asset('/uploads/'  .$crud->image)}}" alt="" style="width: 100px">
                       @endif
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