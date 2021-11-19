<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BestFriend;

class BestFriendController extends Controller
{

    public function addABestFriend(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'favorite_food' => 'required'
        ]);

        BestFriend::create($request->all());
        
        return redirect('/allFriends');
    }

    public function addABestFriendView(){
        return view('friend.add');
    }

    public function getAllBestFriends(){

        $data = [
            'friends' => BestFriend::all()
        ];

        return view('friend.all', $data);

    }

    public function getFirstTwoBestFriends(){
        //
    }

    public function updateABestFriend(){
        //
    }

    public function deleteABestFriend(){
        //
    }
}
