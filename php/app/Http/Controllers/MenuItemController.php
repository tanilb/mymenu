<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use http\Env\Request;
use Illuminate\Http\JsonResponse;


class MenuItemController extends Controller
{
    public function show(Request $request, $name)
    {
        $name = $request->get($request, 'World');
        return new JsonResponse([
            "message" => "Hello " . $name . "!"
        ]);
    }

    public function index(Request $request, $artist)
    {
        $artist = new Menu([
            "id" => "Sublime",
            "name" => "Sublime",
            "startedAt" => "1990-01-01",
        ]);

        return new JsonResponse($artist);
    }

}
