<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Job;

class PersonalController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $data['userName'] = $user->name;
        $data['pageTitle'] = 'Добро пожаловать, ' . $user->name;
        return view('personal.index', $data);
    }

    public function offers(Request $request)
    {
        $userId = Auth::id();
        $userJobs = Job::where('user_id', $userId)->paginate(99999);
        
        return view('personal.offers', [
            'jobs' => $userJobs
        ]);
    }
}
