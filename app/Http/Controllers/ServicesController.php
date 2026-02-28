<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServicesController extends Controller
{
    public function index(){
        $data['services'] = [
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

        return view('services.index', $data);
    }

    public function show($service)
    {
        $data['title'] = 'Заголовок поста';
        $data['description'] = 'Описание поста';
        $data['price'] = '20 000 руб.';
        $data['time'] = '2 дня';
        
        return view('services.show', $data);
    }

        public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {

        $userId = Auth::id();

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'price' => ['required', 'numeric', 'min:0'],
            'time' => ['required', 'numeric', 'min:1'],
            'description' => ['string', 'nullable'],
            'priceVague' => ['boolean', 'nullable'],
        ]);

        Service::create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'time' => $validated['time'],
            'priceVague' => $validated['priceVague'] ?? false,
            'description' => $validated['description'] ?? null,
            'user_id' => $userId
        ]);

        return redirect()->route(route: 'personal');

    }
}
