<x-header/>

<style>
.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
    margin-left: 400px;
    margin-top: 20px
}

.register-form{
    margin-top: 60px;
}

</style>

<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>Register</p>
        </div>

        <div class="form-content">
            @if(session('user'))
            <p class="alert alert-success">{{session('user')}} Registered Successfully, Check your Email for Verification</p>
            @endif
            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group">
                        <form action="register" method="post">
                        @csrf
                        <input type="text" name="user_name" class="form-control" placeholder="User Name *" value=""/>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email *" value=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Your Password *" value=""/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="same_password" class="form-control" placeholder="Confirm Password *" value=""/>
                    </div>
                </div>
            </div>
            <button type="submit" class="btnSubmit">Submit</button>
        </div>
    </form>
    </div>
</div>

<x-footer/>