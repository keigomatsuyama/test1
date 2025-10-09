<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(IndexRequest $request)
    {
        $data = $request->only(['name', 'email', 'pass']);
        $data = $request->only(['email', 'password']);
        return view('login', ['data' => $data]);
    }
    public function submit()
    {
        return view('login');
    }

    public function submit1(LoginRequest $request)
    {

        $data = $request->only(['email', 'password']);
        return view('login', ['data' => $data]);
    }
    public function admin()
    {
        return view('admin');
    }
    public function thanks()
    {
        return view('thanks');
    }
}
