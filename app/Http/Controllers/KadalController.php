<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;

class KadalController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function render() {
        return DB::table('order')->get();
    }
}
