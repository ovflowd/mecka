<?php

namespace App\Http\Controllers;

use App\UserEvent;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class UserEventsController extends Controller
{
    /**
     * Store a User Event
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $obj = UserEvent::create($request->all());

        return response()->json($obj);
    }

    /**
     * Delete a User Event
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(int $id){
        $obj  = UserEvent::find($id);
        $obj->delete();

        return response()->json('Removed successfully.');
    }
}
