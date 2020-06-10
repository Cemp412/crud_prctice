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
      

     @foreach($data as $dat)
	<tr>
		<td scope="row">{{$dat->name}}</td>
		<td>{{$dat->email}}</td>
		<td>{{$dat->mobileno}}</td>
		<td>{{$dat->gender}}</td>
		<td>{{$dat->qulification}}</td>
		<td>{{$dat->address}}</td>
		<td>@php if(!empty($dat->image))
          {
		@endphp

       <img src="{{url('/upload' .$dat->image)}}" style="height: 150px; width: 150px; border-radius: 100%;">
        @php }else { @endphp
         <p>No  image found</p>
         @php } @endphp
	</td>


	<td>
		<a href="{{url('/crud/show/' .$dat->id)}}" class="btn btn-primary">View</a>
		<a href="{{url('/crud/' .$dat->id. '/edit')}}" class="btn btn-primary">Edit</a> 
		<a href="{{url('/crud/delete/' .$dat->id)}}" class="btn btn-danger">Delete</a>
	</td>

</tr>
@endforeach
      
     
     
	

</table>

</body>
</html>