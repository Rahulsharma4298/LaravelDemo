<body>
  <x-header/>

<div class="jumbotron text-center">
  <h1>Laravel Website</h1>
  <p>My first laravel site.</p>
</div>
<div class="container">
<ul class="list-group">
  <a class="list-group-item d-flex justify-content-between align-items-center alert-info btn-dark btn" href="/login">
    Login
  </a>
  <a class="list-group-item d-flex justify-content-between align-items-center alert-info btn-dark btn" href="/register">
    Register
  </a>
  <a class="list-group-item d-flex justify-content-between align-items-center alert-info btn-dark btn" href="/allusers">
    All Users
  </a>
  <a class="list-group-item d-flex justify-content-between align-items-center alert-info btn-dark btn" href="/members">
    All Members (API)
  </a>
  <a class="list-group-item d-flex justify-content-between align-items-center alert-info btn-dark btn" href="/database/operations">
    Database Operations
  </a>
  <a class="list-group-item d-flex justify-content-between align-items-center alert-info btn-dark btn" href="/mail">
    Markdown Mails
  </a>
</ul>
<br>
</div>

<x-footer/>
</body>