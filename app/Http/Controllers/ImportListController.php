<?php

namespace App\Http\Controllers;

use App\Models\ImportList;

class ImportListController extends Controller
{
	public function index()
    {
		$path = storage_path('app/private/lists/movies.json');
		$json = file_get_contents($path);

        $data = json_decode($json, true);

        $movies = collect($data['data']['titles'] ?? [])
            ->map(function ($item) {
                return [
                    'imdbId' => $item['id']
                ];
            })
            ->values();

        return response()->json($movies);
    }
}
