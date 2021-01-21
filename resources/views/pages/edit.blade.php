<x-header/>
<br>
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
                <p>Edit User</p>
            </div>
    
            <div class="form-content">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <form action="/edit" method="post">
                            @csrf
        
                            <input type="hidden" name="id" value="{{$data['id']}}">
                            <input type="text" name="user_name" class="form-control" placeholder="User Name *" value={{$data['user_name']}}>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email *" value={{$data['email']}}>
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" placeholder="City *" value={{$data['city']}}>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="password" class="form-control" placeholder="Your Password *" value={{$data['password']}}>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btnSubmit">Update</button>
            </div>
        </form>
        </div>
    </div>
    


<x-footer/>