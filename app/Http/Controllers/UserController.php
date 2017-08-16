<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\allUser as allUser;	

class UserController extends Controller
{
    //
    public function getUsers(){
    	$user = allUser::paginate(10);

        if (!$user) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $user,
            200
        );
    }
}
