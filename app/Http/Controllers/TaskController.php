<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){

        // $tasks = DB::table("tasks")->paginate(8);
        $tasks = Task::paginate(5);
        return view("Tasks.index", ["tasks" =>$tasks]);

    }

// -------------------------------------------------------------------------------------------------------------------------

    public function create(){

        return view("tasks.create");

    }

// -------------------------------------------------------------------------------------------------------------------------

    public function store(Request $request){

        $request->validate([    // Überprüft nur Konditionen, füllt keine Tabellenzellen...
            "title" => "required",
            "description" => "required",
        ]);

        $data["title"] = $request["title"]; // Speichert alle Werte, nachdem die Validierung erfolgreich war
        $data["description"] = $request["description"];
        $data["user_id"] = auth()->id();
        $data["category1"] = empty($request["category1"]) ? false : true; // Ternary Operator in PHP, siehe "Ternärer Operator" : https://www.php.net/manual/de/language.operators.comparison.php
        $data["category2"] = empty($request["category2"]) ? false : true; // If-Statement als Oneliner: if category1 is NOT empty -> true
        $data["datedue"] = $request["datedue"];
        $data["timedue"] = $request["timedue"];

        $newTask = Task::create($data);

        info($data);
        
        return redirect(route("tasks.index"));
    }

// -------------------------------------------------------------------------------------------------------------------------

    public function edit(Task $task){

        return view("tasks.edit", ["task" => $task]);
    }

// -------------------------------------------------------------------------------------------------------------------------

    public function update(Task $task, Request $request){

        $data = $request->validate([
            "title" => "required",
            "description" => "required"
        ]);
        $data["category1"] = empty($request["category1"]) ? false : true; // Ternary Operator in PHP, siehe "Ternärer Operator" : https://www.php.net/manual/de/language.operators.comparison.php
        $data["category2"] = empty($request["category2"]) ? false : true; // If-Statement als Oneliner: if category1 is NOT empty -> true
        $data["datedue"] = $request["datedue"];
        $data["timedue"] = $request["timedue"];
        
        $task->update($data);

        return redirect(route("tasks.index"));
    }

// -------------------------------------------------------------------------------------------------------------------------

    public function delete(Task $task){

        if (auth()->user()->cannot("delete", $task)) {
            return redirect(route("tasks.index"));
        }
        else {
            $task->delete();
            return redirect(route("tasks.index"));

        }


    }

// -------------------------------------------------------------------------------------------------------------------------



}
