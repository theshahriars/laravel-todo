<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

// Model
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (isset($_GET['status']))
        {
            $status = $_GET['status'];
            $todos = Todo::orderBy('created_at', 'DSEC')->where('status', $status)->where('user_id', $user->id)->paginate(10);
        }
        else if (isset($_GET['filter']))
        {
            $filter = $_GET['filter'];
            $todos = Todo::orderBy('created_at', 'DSEC')->where('priority', $filter)->where('user_id', $user->id)->paginate(10);
        }
        else if (isset($_GET['search']))
        {
            $key = $_GET['search'];
            $todos = Todo::orderBy('created_at', 'DSEC')->where(function ($query) use($key) {
                return $query->where('title', 'LIKE','%'.$key.'%')
                    ->orWhere('description', 'LIKE','%'.$key.'%')
                    ->orWhere('start', 'LIKE','%'.$key.'%')
                    ->orWhere('end', 'LIKE','%'.$key.'%')
                    ->orWhere('priority', 'LIKE','%'.strtolower($key).'%')
                    ->orWhere('status', 'LIKE','%'.$key.'%')
                    ->get();
            })->where('user_id', $user->id)->paginate(10);
        }
        else
        {
            $todos = Todo::orderBy('created_at', 'DSEC')->where('user_id', $user->id)->paginate(10);
        }

        return view('admin.todo.index', compact('todos'));
    }

    public function create()
    {
        return view('admin.todo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'priority' => 'required'
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->start = $request->start;
        $todo->end = $request->end;
        $todo->priority = $request->priority;
        $todo->user_id = Auth::user()->id;
        $todo->save();

        return redirect()->back()->with('message', 'Todo item has been added successfully');
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);

        return view('admin.todo.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'priority' => 'required'
        ]);

        $todo = Todo::findOrFail($id);
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->start = $request->start;
        $todo->end = $request->end;
        $todo->priority = $request->priority;
        $todo->user_id = Auth::user()->id;
        $todo->update();

        return redirect()->back()->with('message', 'Todo item has been updated successfully');
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->back()->with('message', 'Todo item has been deleted successfully');
    }

    public function toggle($id)
    {
        $todo = Todo::findOrFail($id);
        if ($todo->status == 1)
        {
            $todo->status = 0;
        }
        else
        {
            $todo->status = 1;
        }
        $todo->update();

        return redirect()->back()->with('message', 'Todo status has been updated successfully');
    }
}
