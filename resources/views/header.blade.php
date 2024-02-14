<div class="bg-dark text-white">
    <h1 id="user-header">
    @auth Welcome, {{auth()->user()->username}}

<x-center-content>
 
            <div id="homebutton" class="p-2">
                <a class="btn btn-blue" href="/">Home</a> 
            </div>

            <div id="todobutton" class="p-2">
            <form action="/task" method="POST">
                <a class="btn btn-blue" href="/task">Todo List</a>
                </form>
            </div>
            
            <div id="createbutton" class="p-2">
                <a class="btn btn-blue" href="/task/create">Create Task</a> 
            </div>

            <div id="createbutton" class="ml-auto p-2">
            <form action="/logout" method="POST">
            @csrf
                <button class="btn btn-blue">Logout</button>
            </form>
            </div>

</x-center-content>

    </h1>
</div>
@endauth
