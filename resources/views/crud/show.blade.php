@extends('layouts.master')
<table class="table">
	<thead>
	<tr>
		<th  scope="col">Name</th>
		<th scope="col">Email</th>
		<th scope="col">Mobileno</th>
		<th scope="col">Gender</th>
		<th scope="col">Qualification</th>
		<th scope="col">Address</th>
		<th scope="col">Image</th>
	</tr>
</thead>
      

    
	<tr>
		<td >{{$crud->name}}</td>
		<td>{{$crud->email}}</td>
		<td>{{$crud->mobileno}}</td>
		<td>{{$crud->gender}}</td>
		<td>{{$crud->qulification}}</td>
		<td>{{$crud->address}}</td>
		<td>@php if(!empty($crud->image))
          {
		@endphp

       <img src="{{url('/upload' .$crud->image)}}" style="height: 150px; width: 150px; border-radius: 100%;">
        @php }else { @endphp
         <p>No  image found</p>
         @php } @endphp
	</td>


	<td>
		<a href="{{url('/crud/show/'.$crud->id)}}" class="btn btn-primary">View</a>
		<a href="{{url('/crud/' .$crud->id. '/edit')}}" class="btn btn-primary">Edit</a>
		<a href="{{url('/crud/delete/' .$crud->id)}}" class="btn btn-danger">Delete</a>
	</td>

</tr>

      
     
     
	

</table>

</body>
</html>