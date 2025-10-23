<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');


        return redirect()->route('dashboard', [
            'username' => $username,
            'password' => $password
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $password = $request->query('password');

        return view('dashboard', compact('username', 'password'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        $password = $request->query('password');

        return view('profile', compact('username', 'password'));
    }


    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $rooms = [
            ['no' => '101', 'type' => 'Deluxe', 'price' => 450000, 'status' => 'Tersedia'],
            ['no' => '102', 'type' => 'Standard', 'price' => 300000, 'status' => 'Tersedia'],
            ['no' => '201', 'type' => 'Family', 'price' => 600000, 'status' => 'Dipesan'],
            ['no' => '202', 'type' => 'Suite', 'price' => 800000, 'status' => 'Tersedia'],
        ];

        return view('pengelolaan', compact('rooms', 'username'));
    }
}
