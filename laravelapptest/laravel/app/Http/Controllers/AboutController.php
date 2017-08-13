<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AboutController extends BaseController
{
   public function ShowAbout(){
       return 'new page about';
   }
    public function ShowMenu(){
        return 'new page menu';
    }

}
