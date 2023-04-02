<?php

namespace App\Http\Controllers;

use App\Models\Advantages;
use App\Models\Comment;
use App\Models\Cooperate;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Team;
use App\Models\Typing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $typing = Typing::query()->with('texts')->first();
        $team = Team::query()->orderBy('order')->get();
        $faq = Faq::query()->orderBy('order')->get();
        $services = Service::query()->orderBy('order')->get();
        $advantages = Advantages::query()->orderBy('order')->get();
        $cooperate = Cooperate::query()->orderBy('order')->get();
        $comments = Comment::query()->orderBy('order')->get();

        return view('index',compact('typing','team','faq','services','advantages','cooperate','comments'));
    }
}
