<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\CommunityFollower;
use Illuminate\Http\Request;

class CommunityFollowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function follow(Community $community)
    {
        $isFollowed = CommunityFollower::where('community_id', $community->id)->where('user_id', auth()->id())->first();

        if (is_null($isFollowed)) {
            CommunityFollower::create([
                'user_id' => auth()->id(),
                'community_id' => $community->id
            ]);
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unfollow(Community $community)
    {
        $isFollowed = CommunityFollower::where('community_id', $community->id)->where('user_id', auth()->id())->first();

        if (!is_null($isFollowed)) {
            $isFollowed->delete();
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommunityFollower  $communityFollower
     * @return \Illuminate\Http\Response
     */
    public function show(CommunityFollower $communityFollower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommunityFollower  $communityFollower
     * @return \Illuminate\Http\Response
     */
    public function edit(CommunityFollower $communityFollower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommunityFollower  $communityFollower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommunityFollower $communityFollower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommunityFollower  $communityFollower
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommunityFollower $communityFollower)
    {
        //
    }
}
