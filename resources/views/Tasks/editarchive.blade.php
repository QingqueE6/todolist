<x-layout>


    <div class="form-control bg-dark border-dark text-white">
        <form method="POST" action="/edit-archive/{{ $task->id }}">
        @csrf
        @method('PUT')
    </div>

<x-center-content>

        <div id="wrapper" class="w-25 bg-dark m-2 p-2 text-white">

            <h1 class="text-white">Archive Task Nr. {{$task->id}}</h1><hr class="border-white">

            <p><input type="checkbox" id="is_archived" name="is_archived" @if($task->is_archived === true)checked @endif>
            <label for="category1">Archived</label>
            @include("styling.archive-task")
            </p>

        
        </form>
            
    </div>

</x-center-content>   
</x-layout>