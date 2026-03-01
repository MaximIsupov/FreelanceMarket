<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Offer;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{

    public function create(Request $request, Job $job)
    {   
        return view('offers.create', [
            'job' => $job
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['string', 'max:50', 'required'],
            'price' => ['numeric', 'required'],
            'time' => ['numeric', 'required'],
            'message' => ['string', 'nullable'],
            'jobId' => ['numeric', 'required'],
        ]);

        $userId = Auth::id();

        Offer::create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'time' => $validated['time'],
            'message' => $validated['message'],
            'user_id' => $userId,
            'job_id' => $validated['jobId'],
        ]);

        $data['title'] = "Ваш оффер успешно создан";
        $data['text'] = 'Вы можете вернуться на <a href="' . route('home') . '">Главную страницу</a> или посетить <a href="' . route('personal') . '">Личный кабинет</a>.';
        
        return view('includes.success', [
            'data' => $data
        ]);
    }
}
