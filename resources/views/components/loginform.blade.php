


<div id="loginsection" class="bg-slate-500 p-2 mt-2 mb-2">
    <h1 class="text-white font-weight-bold ">Log in here, yippie</h1>
    <form action="/login" method="POST">
    @csrf
            <div id="logincontrol" class="bg-dark m-2 p-2">
                                    <p class="text-primary font-weight-bold">Login</p>
                    <div class="form-control"><input name="username-login" placeholder="Username" type="text"></div>
    
                    <div class="form-control"><input name="password-login" placeholder="Password" type="password"></div>
    
                    <button type="submit" class="btn btn-blue">Login now</button>
            </div>
    </form>
</div>

