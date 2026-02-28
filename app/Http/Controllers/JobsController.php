<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function index()
    {

        $data['jobs'] = [
            ['link' => '/', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/1', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/2', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/3', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/4', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/1', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/2', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/3', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/4', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
        ];

        return view('jobs.index', $data);
    }

    public function show($job)
    {
        $data['title'] = 'Заголовок поста';
        $data['description'] = 'Описание поста';
        $data['price'] = '20 000 руб.';
        $data['time'] = '2 дня';
        
        return view('jobs.show', $data);
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
