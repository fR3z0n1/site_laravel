<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timeline;

class TimelineController extends Controller
{
    public function getTimeline() {

        $timeline = new Timeline();

        $news = $timeline->paginate(10);

        return view('timeline', ['news' => $news]);
    }
}