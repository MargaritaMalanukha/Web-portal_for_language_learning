<?php

namespace App\Http\Controllers;

use App\Models\Auth\Authorization;
use App\Models\Participant;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        $rooms = Room::getAllOrderByDesc();
        for ($i = 0; $i < count($rooms); $i++) {
            $participants[$i] = Participant::getAllInRoom($rooms[$i]->id);
        }

        return view('rooms.catalog')
            ->with('rooms', $rooms)
            ->with('participants', $participants);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $ownerId = $request->session()->get('id');
        $room = Room::create($ownerId);
        Participant::createIfNotExists($room->id, $ownerId);
        return redirect()
            ->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param $roomId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Request $request, $roomId)
    {
        $userId = $request->session()->get('id');
        Participant::createIfNotExists($roomId, $userId);
        return view('rooms.rooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $roomId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($roomId)
    {
        Participant::deleteP($roomId);
        Room::deleteR($roomId);
        return redirect()->route('rooms.index');
    }
}
