<x-layout>
    <x-center-content>
    @if(session()->has("success"))
        {{session("success")}}
    @endif

    @if(session()->has("deletion"))
        {{session("deletion")}}
    @endif

<div class="border-dark p-2">
    <table class=" table-auto border border-separate border-slate-200 text-white bg-dark">
        <tr>
            <th class="border border-slate-200">ID</th>
            <th class="border border-slate-200">Title</th>
            <th class="border border-slate-200">Description</th>
            <th class="border border-slate-200">Created at:</th>
            <th class="border border-slate-200">Categories</th>
            <th class="border border-slate-200">Due until:</th>
            <th class=""></th>
            <th class=""></th>
        </tr>
        
        @foreach($tasks as $task)
    
            <tr class="trborder">
                <td class="border border-slate-200">#{{$task->id}}</td>
                <td class="border border-slate-200">{{$task->title}}</td>
                <td class="border border-slate-200">{{$task->description}}</td>
                <td class="border border-slate-200">{{$task->created_at}}</td>
                
                <td class="border border-slate-200">      @if($task->category1 === 1) <span class="badge badge-success">Private</span> @endif
                                                            @if($task->category2 === 1) <span class="badge badge-danger">Work</span> @endif</td>

                <td class="border border-slate-200">{{$task->datedue}} {{$task->timedue}}</td>
                
                @can("update", $task)
                <td class="border border-slate-200">
                    <a href="{{route("tasks.edit", ["task" => $task])}}">EDIT</a>
                </td>
                @endcan

                @can("delete", $task)
                <td class="border border-slate-200"> 
                    <form method="post" action="{{route("tasks.delete", ["task" => $task])}}">
                    @csrf @method("delete")
                    <button class="btn btn-blue fa fa-trash"></button>
                    </form>
                </td>
            
                @endcan
        
            </tr>
        
        @endforeach
    </table>
    {{$tasks->links()}}
</div>

</x-center-content>



</x-layout>