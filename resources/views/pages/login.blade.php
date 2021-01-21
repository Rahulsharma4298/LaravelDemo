<x-header/>

@if($errors->any())
@foreach ($errors->all() as $err)
<li class="alert-danger text-center">{{$err}}</li>
@endforeach
@endif
<div class="form form-group">
    <h1 class="text-center form-group alert btn-primary">Login</h1>
<form method="POST" action="user">
    <div class="container text-center">
    @csrf
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password"><br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

<x-footer/>