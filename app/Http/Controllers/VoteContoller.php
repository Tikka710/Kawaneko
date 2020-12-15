<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;

class VoteContoller extends Controller
{
    public function vote(Request $request, Vote $vote)
    {
        $vote->answer = $request->answer;
        $vote->answer->vote_count = $vote->answer->vote_count + 1;
        $vote->save();

        return redirect()>route('articles.index');

    }
}
