<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PagesController extends Controller
{
    public function getPages()
    {
        $pages = Pages::where('name', 'bala')->first()->toJson();

        // return Response::json(json_decode($pages));
        dd(json_decode($pages));


        // $usersWithPosts = User::raw(function($collection) {
        //     return $collection->aggregate([
        //         [
        //             '$lookup' => [
        //                 'from' => 'posts', // The collection to join
        //                 'localField' => '_id', // The field from the input documents
        //                 'foreignField' => 'user_id', // The field from the documents of the "from" collection
        //                 'as' => 'posts' // The name of the new array field to add to the input documents
        //             ]
        //         ]
        //     ]);
        // })->toJson();

        // // dd(json_decode($usersWithPosts));
        // return response()->json(json_decode($usersWithPosts));
    }
}
