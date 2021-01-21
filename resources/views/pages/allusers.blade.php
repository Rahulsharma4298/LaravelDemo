<x-header/>
<br>
<div class="container">
	<div class="form-group alert btn-primary">
		<h2 class="text-center">Registered Users List</h2>
	</div>
<table class="table table-hover table-bordered border-primary table-md">
	<thead>
	  <tr>
		<th scope="col">ID</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
		<th scope="col">City</th>
        <th scope="col">Date Created</th>
        <th scope="col">Operations</th>
	  </tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
		<th scope="row">{{$user['id']}}</th>
			<td>{{$user['user_name']}}</td>
			<td>{{$user['email']}}</td>
            <td>{{$user['city']}}</td>
            <td>{{$user['date_time']}}</td>
            <td><a class="btn btn-danger" href="delete/{{$user['id']}}">Delete</a>
                <a class="btn btn-info" href="edit/{{$user['id']}}">Edit</a>
            </td>
		</tr>
		@endforeach
	</tbody>

</table>
<span>
{{$users->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>
@if(session()->has('deleted'))
<span><p class="alert alert-success">User Deleted Successfully!</p>
@endif
@if(session()->has('edited'))
<span><p class="alert alert-success">User Details Updated Successfully!</p>
@endif
</div>



<x-footer/>