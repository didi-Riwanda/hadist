<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HadistResource;
use App\Models\Hadist;
use Illuminate\Http\Request;

class HadistController extends Controller
{
    public function index(){
        $hadists = Hadist::latest()->paginate(5);

        return new HadistResource(true, 'All Hadist', $hadists);
    }
}
