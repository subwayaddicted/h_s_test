<?php

namespace App\Http\Controllers;

use App\Friends;
use Illuminate\Http\Request;

/**
 * Class InviteController
 *
 * @group Friends and invites management
 *
 * @package App\Http\Controllers
 */
class FriendsInviteController extends Controller
{
    /**
     * Show all relations
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $friend_invites = Friends::all();

        return response()->json($friend_invites, 200);
    }

    /**
     * Create new friend
     *
     * @authenticated
     * @bodyParam friends_id int Id of the user friend request will be sent to. Example: 1
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        Friends::updateOrCreate([
            'user_id' => $request->user()->id,
            'friends_id' => $request->friends_id,
            'accepted' => false
        ]);

        return response()->json(['Invite sent to ' . $request->friends_id], 201);
    }

    /**
     * Show friend record
     *
     * @urlParam id int Id of the record to show. Example: 1
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id)
    {
        $friend_invite = Friends::findOrFail($id);

        return response()->json([$friend_invite], 200);
    }

    /**
     * Update friend record
     *
     * @urlParam id int Id of the record to update. Example: 1
     * @bodyParam user_id int Id of the user friend request was sent from. Example: 1
     * @bodyParam friends_id int Id of the user friend request was sent to. Example: 2
     * @bodyParam accepted boolean Status of the friend request. Example: false
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(int $id, Request $request)
    {
        $friend_invite = Friends::findOrFail($id);

        $friend_invite->user_id = $request->user_id;
        $friend_invite->friends_id = $request->friends_id;
        $friend_invite->accepted = $request->accepted;

        $friend_invite->save();

        return response()->json([$friend_invite], 200);
    }

    /**
     * Delete friend record
     *
     * @urlParam id int Id of the record to delete. Example: 1
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $friends_invite = Friends::findOrFail($id);
        $friends_invite->delete();

        return response(null, 204);
    }

    /**
     * Accept friend invite
     *
     * @authenticated
     * @bodyParam friends_id int Id of the user friend request was sent from. Example: 2
     *
     * @param Request $request
     * @return string
     */
    public function accept(Request $request)
    {
        $friends_invite = Friends::where([
            'user_id' => $request->friends_id,
            'friends_id' => $request->user()->id
        ])->first();
        $friends_invite->accepted = true;
        $friends_invite->save();

        return response()->json(['message' => 'Invite accepted'], 200);
    }

    /**
     * Decline friend invite
     *
     * @authenticated
     * @bodyParam friends_id int Id of the user friend request was sent from. Example: 2
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function decline(Request $request)
    {
        $friends_invite = Friends::where([
            'user_id' => $request->friends_id,
            'friends_id' => $request->user()->id
        ])->first();
        $friends_invite->delete();

        return response()->json(['message' => 'Invite declined'], 200);
    }
}
