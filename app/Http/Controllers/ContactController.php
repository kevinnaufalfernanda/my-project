<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Kirim email
        // Note: Pastikan .env dikonfigurasi dengan benar untuk SMTP
        try {
             Mail::to('kevinnaufalfernanda@gmail.com')->send(new ContactFormMail($validatedData));
        } catch (\Exception $e) {
            // Log error atau abaikan jika lokal tanpa smtp
        }

        return redirect()->back()->with('success', 'Pesan berhasil dikirim! Saya akan segera menghubungi Anda.');
    }
}
