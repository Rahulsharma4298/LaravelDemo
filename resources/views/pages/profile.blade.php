<x-header/>
<div class="container text-center">
    <h2 class="btn-primary alert">Profile</h2>
    <div class="card mx-auto" style="width:250px">
      <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="profile image" style="width:100%">
      <div class="card-body">
      <h4 class="card-title">{{session('user')}}</h4>
        <p class="card-text">He is an architect and engineer</p>
        <p class="card-text">Session: {{session('user')}}</p>
        <a href="/logout" class="btn btn-danger">Logout</a>
      </div>
    </div>
</div>
    <br>
 
<x-footer/>