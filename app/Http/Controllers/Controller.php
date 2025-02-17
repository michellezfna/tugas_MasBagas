<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class Controller extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Logika untuk mengirim email atau menyimpan pesan
        return redirect()->route('contact')->with('success', 'Pesan berhasil dikirim!');
    }
}