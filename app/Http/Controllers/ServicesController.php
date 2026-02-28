<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServicesController extends Controller
{
    public function index(Request $request){
        $perPage = $request->input('per_page', 12);
        $perPage = min(max($perPage, 5), 100);

        $services  = Service::query()
            ->with(['user'])
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        return view('services.index', [
            'services' => $services
        ]);
    }

    public function show(Service $service)
    {
        $service->load('user');
        return view('services.show', compact('service'));
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
