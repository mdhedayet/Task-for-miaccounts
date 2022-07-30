<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReportOneResource;
use App\Models\MainLevel;
use Illuminate\Http\Request;

class ReportOneController extends Controller
{
    public function index()
    {
        $data = MainLevel::with('accountHead')->with('subLevel', function($query){
            $query->with('childLevel',function($query){
                $query->with('accountHead');
            })->with('accountHead');
           })
           ->paginate(3);

        return ReportOneResource::collection($data);
    }
}
