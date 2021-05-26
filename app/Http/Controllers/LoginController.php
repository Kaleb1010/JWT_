<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('signin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|ResponseFactory|RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */

    public function login_method(Request $request){

        $user_db= User::all();
//          dd($user_db);
        //check email
        $user = User::where('email', $request->email)->first();
        $pass = $request->input('password');


         $user->createToken('app_token')->plainTextToken;

        if ($user){
//            if ($user->role == 'admin'){
//                return view('welcome');
//            }else{
//                return redirect('update');
//            }
            return redirect('/api/update');

        }else{
            return back();
        }
//
//        $response = [
//            'user' => $user,
//            'token' => $token,
//        ];



    }




    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(Request $request){
        $user = $request->user();
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
        return[
            'message' => 'logged out'
        ];
    }
}
