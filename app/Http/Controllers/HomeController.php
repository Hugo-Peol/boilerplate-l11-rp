<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
use App\Http\Requests\HomeUpdateRequest;
use App\Services\HomeService;
use Illuminate\Http\JsonResponse;
use App\Services\Contracts\OpenAIChatServiceInterface;
use Illuminate\Contracts\View\View;
use Ramsey\Collection\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeController extends Controller
{

    public function __construct(
        private readonly HomeService $service,
    ) {
    }


    public function index(): View
    {
        return view('home');
    }

    public function store(HomeRequest $request): View
    {
        return view('home');
    }

}
