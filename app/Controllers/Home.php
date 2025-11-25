<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function starter(): string
    {
        return view('tabler/starter');
    }
}
