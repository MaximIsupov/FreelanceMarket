<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 12);
        $perPage = min(max($perPage, 5), 100);

        $jobs  = Job::query()
            ->with(['user'])
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function show(Job $job)
    {
        $job->load('user');
        return view('jobs.show', compact('job'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {

        $userId = Auth::id();

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'price' => ['required', 'numeric', 'min:0'],
            'time' => ['required', 'numeric', 'min:1'],
            'description' => ['string', 'nullable'],
        ]);

        Job::create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'time' => $validated['time'],
            'description' => $validated['description'] ?? null,
            'user_id' => $userId
        ]);

        return redirect()->route(route: 'personal');

    }
}
