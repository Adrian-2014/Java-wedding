<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{


    public function invitation($id) {

        $guest = User::where('id', $id)->first();

        return view('guest_invitation', compact('guest'));
    }


    public function registration() {
        return view('guest_registration');
    }


    public function konfirmasi(Request $request) {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'status' => 'required',
        ]);

        $guest = User::where('id', $request->id)->first();
        $guest->status = $request->status; 
        $guest->email = $request->email; 
        $guest->save();

        return redirect()->back()->with('success', 'Terimakasih Bapak/ibu ' . $request->name . ' atas umpan baliknya.');
    }

    public function registrasi(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $validGuest = User::where('email', $request->email)->first();

        if($validGuest) {
            $validGuest->status = "hadir";
            $validGuest->save();
            return back()->with('success', 'Registrasi Berhasil! Selamat datang di Acara kami.');
        }else {
            return back()->with('error', 'Tidak ada data yang sesuai dengan rincian anda!');

        }
    }
}
