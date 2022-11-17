<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {

        $context = ['todos' => Todo::latest()->get()];
        return view('index', $context);
    }

    public function detail(Todo $todo)
    {
        return view('detail', ['todo' => $todo]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Todo::create(['title' => $request->title, 'description' => $request->description]);
        return redirect()->route('/todo');
    }
}
