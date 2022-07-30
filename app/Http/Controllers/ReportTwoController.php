<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReportTwoResource;
use App\Models\AccountHead;
use Illuminate\Http\Request;

class ReportTwoController extends Controller
{
    public function index()
    {
        $data = AccountHead::with('mainLevel','subLevel','childLevel')->paginate(10);
        return ReportTwoResource::collection($data);
    }
}
