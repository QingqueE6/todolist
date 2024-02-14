{{-- The $message value is provided by Laravels error function and displays text, depending on which requirements arent met --}}

@error("email")         
<p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>           
@enderror 

