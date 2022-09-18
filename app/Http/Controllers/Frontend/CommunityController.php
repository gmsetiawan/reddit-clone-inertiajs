<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommunityPostResource;
use App\Http\Resources\CommunityResource;
use App\Models\Community;
use App\Models\CommunityFollower;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CommunityController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $community = Community::where('slug', $slug)->firstOrFail();
        $posts = CommunityPostResource::collection($community->posts()->with(['user', 'postVotes' => function ($query) {
            $query->where('user_id', auth()->id());
        }])->withCount('comments')->paginate(5));

        $communities = CommunityResource::collection(Community::withCount('posts')->latest()->take(4)->get());

        $isFollowed = CommunityFollower::where('community_id', $community->id)->where('user_id', auth()->id())->count();


        return Inertia::render('Frontend/Communities/Show', compact('community', 'posts', 'communities', 'isFollowed'));
    }
}
