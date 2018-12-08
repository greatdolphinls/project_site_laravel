<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Models\Plan;
use App\Models\Project;
use App\Models\Notice;


class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


    public function __construct()
    {
    }

    protected function setSharedVariables()
    {
        view()->share('currentUser', auth()->user());
        view()->share('serverTime', date('Y-m-d H:i:s'));
    }
}
