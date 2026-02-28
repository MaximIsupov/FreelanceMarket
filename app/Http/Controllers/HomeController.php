<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Service;

class HomeController extends Controller
{
    
    public function index(){

        $latestJobs = Job::latest()->take(5)->paginate(99999);
        $latestServices = Service::latest()->take(5)->paginate(99999);
        return view('home.welcome', [
            'latestJobs' => $latestJobs,
            'latestServices' => $latestServices,
        ]);
    }

}
