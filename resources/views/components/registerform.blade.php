

<div id="loginsection" class="bg-slate-500 p-2 mt-2 mb-2 vw-5"><h1>
    <h2 class="text-white font-weight-bold">Don't have an account? Register here</h2>
    <form action="/register" method="POST">
    @csrf
            <div id="formcontrol" class="bg-dark m-2 p-2">
                    <p><label for="username-register" class="text-primary font-weight-bold">Username</label><input value="{{old("username")}}" name="username" id="username-register" class="form-control" type="text" placeholder="Pick a username"/></p>
                    @include("Errors.wrongfield-username")
    
                    <p><label for="email-register" class="text-primary font-weight-bold">Email</label>
                    <input value="{{old("email")}}" name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com"/></p>
                    @include("Errors.wrongfield-email")
    
                    <p><label for="password-register" class="text-primary font-weight-bold">Password</label>
                    <input value="{{old("password")}}" name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" /></p>
                    @include("Errors.wrongfield-password")
    
                    <p><label for="password-register-confirm" class="text-primary font-weight-bold">Confirm Password</label>
                    <input value="{{old("password")}}" name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" /></p>
                    @include("Errors.wrongfield-password")
            </div>
    
    
    <button type="submit" class="btn btn-blue">Register now</button>
    </form>
</div>

