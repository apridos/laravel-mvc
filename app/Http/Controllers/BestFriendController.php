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
        
        $data = [
            'friends' => BestFriend::getFirstTwoBestFriends(),
        ];

        return view('friend.all', $data);
    }

    public function updateABestFriend(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'favorite_food' => 'required'
        ]);

        BestFriend::where('id', $request->id)->update(
            [
                "name" => $request->name,
                "favorite_food" => $request->favorite_food
            ]
        );
        
        return redirect('/allFriends');
    }

    public function deleteABestFriend(Request $request){
        BestFriend::where('id', $request->id)->delete();

        return redirect('/allFriends');
    }
}
