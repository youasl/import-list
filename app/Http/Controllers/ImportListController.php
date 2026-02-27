<?php

namespace App\Http\Controllers;

use App\Models\ImportList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImportListController extends Controller
{
	public function index(){
	    return response()->json([
			"status" => "success",
			"data" => []
		], 200);
    }
}
