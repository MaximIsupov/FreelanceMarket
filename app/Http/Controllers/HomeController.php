<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $data['sellersSectionTitle'] = "Последние заявки на выполнение работы от селлеров";
        $data['sellersFullPageUrl'] = "/";
        $data['latestJobs'] = [
            ['link' => '/', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/1', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/2', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/3', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/4', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
        ];

        $data['freelancersSectionTitle'] = "Последние размещения услуг от фрилансеров";
        $data['freelancersFullPageUrl'] = "/";
        $data['latestServices'] = [
            ['link' => '/', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/1', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/2', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/3', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
            ['link' => '/4', 'title' => 'Предложение работы', 'time' => '3 дня', 'price' => '20 000 руб.'],
        ];
        return view('home.welcome', $data);
    }

}
