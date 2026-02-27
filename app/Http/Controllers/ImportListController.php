<?php

namespace App\Http\Controllers;

use App\Models\ImportList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImportListController extends Controller
{
	public function index()
    {
        return response()->json([
            [
                "imdbId" => "tt0948470"
            ],
            [
                "imdbId" => "tt1074638"
            ]
        ]);
    }
}
