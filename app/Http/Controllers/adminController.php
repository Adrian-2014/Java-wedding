<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard() {
        $tamus = User::get();
        return view('admin.dashboard', compact('tamus'));
    }

    public function addGuest(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'institusi' => 'required',
        ]);

        $guest = new User();
        $guest->name = $request->name;
        $guest->institusi = $request->institusi;
        $guest->status = "proses";
        $guest->save();
        $guest->url = url("guest_invitation/" . $guest->id);
        $guest->save();
        return back()->with('success', 'Data dan Url berhasil dibuat!');
    }


    public function updateGuest(Request $request) {
        $request->validate([
            'name' => 'required',
            'institusi' => 'required',
        ]);


            $guest = User::where('id', $request->id)->first();
            $guest->name = $request->name;
            $guest->institusi = $request->institusi;
            $guest->save();
            return back()->with('success', 'Data berhasil diubah!');

    }
}
