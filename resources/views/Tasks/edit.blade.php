<x-layout>


    <form method="post" action="{{route("tasks.update", ["task" => $task])}}">
        @csrf
        @method("put")  {{-- method put for updating an already existing database entry --}}
   
<x-center-content> 
    <div id="wrapper" class="w-25 bg-dark m-2 p-2">

        <h1 class="text-white">Edit Task</h1><hr class="border-white">

            <div class="form-control bg-dark border-dark">
                <p><label class="text-white">Title:</label>
                    <input type="text" name="title" placeholder="Title..." value="{{$task->title}}"/>
                </p>
            </div>

            <div class="form-control bg-dark border-dark">
                <p><label class="text-white">Description:</label>
                    <input type="text" name="description" placeholder="Description..." value="{{$task->description}}"/>
                </p>
            </div>

            <div class="form-control bg-dark border-dark text-white">
                <p><label>Categories:</label>

                    <input type="checkbox" id="category1" name="category1" @if($task->category1 === 1)checked @endif>
                    <label for="category1">Private</label>

                    <input type="checkbox" id="category2" name="category2" @if($task->category2 === 1)checked @endif>
                    <label for="category2">Workrelated</label>
                </p>

            </div>

            <div class="form-control bg-dark border-dark">
                <p><label class="text-white">Due until:</label>
                    <input type="date" id="datedue" name="datedue" value="{{$task->datedue}}">
                    <input type="time" id="timedue" name="timedue" value="{{$task->timedue}}">
                </p>
            </div>

        <div class="d-flex">
                @include("styling.back-to-task")
                @include("styling.update-task")
        </div>

      
    </form>
    </div>
    
</x-center-content> 
</x-layout>