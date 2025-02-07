<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $contents = Category::all();

        return view('index', ['contents' => $contents]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function admin()
    {
        return view('admin');
    }

    public function confirm(Request $request)
    {
        $contents = Category::all();

        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        // dd($contact['content']);
        return view('confirm', compact('contact'));
    }
}
