<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function index(){
        //$redis=Redis::connection();
        Redis::set('name','king');
        Redis::set('sex',1);
        $result=Redis::get('name');
        return $result;
    }
}
