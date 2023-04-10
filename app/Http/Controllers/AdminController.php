<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_facebook()
    {
        return view('admin.facebook');
    }

    public function show_instagram()
    {
        return view('admin.instagram');
    }

    public function show_twitter()
    {
        return view('admin.twitter');
    }

    public function show_linkedin()
    {
        return view('admin.linkedin');
    }

    public function show_github()
    {
        return view('admin.github');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
