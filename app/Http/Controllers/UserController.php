<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string',
            'surname' => 'sometimes|string',
            'lastname' => 'required|string',
            'phone' => 'required|string',
            'gender' => 'required|in:male,femail',
            'day' => 'required|integer|between:1,31',
            'month' => 'required|integer|between:1,12',
            'year' => 'required|integer|between:1900,2020',
            'email' => 'required|email|unique:users',
            'message' => 'sometimes|string',
        ]);

        $dataToSave = [
            'firstname' => $request->firstname,
            'surname' => isset($request->firstname)
                ? $request->firstname
                : '',
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'email' => $request->email,
            'comments' => isset($request->comments)
                ? $request->comments
                : '',
            'birthday' => $request->year . '-' . $request->month . '-' . $request->day
        ];

        $response = User::create($dataToSave);
        return response()->json(null, 200);
    }
}
