<x-header/>
<br>
<div class="container">
	<div class="form-group alert btn-primary">
		<h2 class="text-center">Users List</h2>
	</div>
<table class="table table-hover table-bordered border-primary table-md">
	<thead>
	  <tr>
		<th scope="col">ID</th>
		<th scope="col">Name</th>
		<th scope="col">Email</th>
		<th scope="col">Profile Photo</th>
	  </tr>
	</thead>
	<tbody>
		@foreach($collection as $item)
		<tr>
		<th scope="row">{{$item['id']}}</th>
			<td>{{$item['first_name']}}</td>
			<td>{{$item['email']}}</td>
			<td><img class="rounded-circle" src={{$item['avatar']}}></td>
		</tr>
		@endforeach
	</tbody>

</table>
</div>



<x-footer/>