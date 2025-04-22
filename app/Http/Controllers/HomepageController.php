<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10);
        return view('home', [
            'services' => $services
        ]);
    }
}
