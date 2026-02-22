<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
