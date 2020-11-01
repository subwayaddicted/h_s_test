<?php

namespace App\Http\Controllers;

use App\Friends;
use Illuminate\Http\Request;
use App\User;
use App\Invite;
use App\Mail\FriendInviteCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * Class InviteController
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
     * Create new invite
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $friend_invite = Friends::create([
            'user_id' => $request->user(),
            'friends_id' => $request->friend_id,
            'accepted' => false
        ]);

        return response()->json(['Invite sent to ' . $request->friend_id], 201);
    }

    /**
     * Show friend invite
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
     * Update friend invite
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, int $id)
    {
        $friend_invite = Friends::findOrFail($id);

        $friend_invite->user_id = $request->user_id;
        $friend_invite->friend_id = $request->friend_id;
        $friend_invite->accepted = $request->accepted;

        $friend_invite->save();

        return response()->json([$friend_invite], 200);
    }

    /**
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
     * @param Request $request
     * @return string
     */
    public function accept(Request $request)
    {
        $friends_invite = Friends::findOrFail($request->id);
        $friends_invite->accepted = true;
        $friends_invite->save();

        return response()->json(['message' => 'Invite accepted'], 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function decline(Request $request)
    {
        $friends_invite = Friends::findOrFail($request->id);
        $friends_invite->delete();

        return response()->json(['message' => 'Invite declined'], 200);
    }
}
