<?php

namespace App\Http\Controllers\Dashboard;
use Session;
use App\User;
use App\Image;
use App\Notice;
use App\Ministry;
use Notification;
use Illuminate\Http\Request;
use App\Notifications\NewNotice;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public $jobs = ['العدل' , 'الصحه'];
    public function index()
    {
        $users = User::all();
        $jobs = 11;
        return view('admins.firstpage' , compact(['users' , 'jobs']));
    }
}