<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Some Title';
        $data['posts'] = [];
        $data['things'] = [];
        
        return view('default/dashboard', $data);
    }
}
