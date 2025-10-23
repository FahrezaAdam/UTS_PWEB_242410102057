<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        if (session()->has('username')) {
            return redirect()->route('dashboard');
        }

        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'admin' && $password === '12345') {
            session(['username' => $username]);
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Username atau password salah.');
    }

    public function dashboard()
    {
        $username = session('username');
        if (!$username) {
            return redirect()->route('login')->with('message', 'Silakan login terlebih dahulu.');
        }

        $branding = [
            'nama_toko' => 'SepatuStore',
            'tagline'   => 'Langkah Nyaman, Gaya Maksimal',
            'promo'     => 'Gratis Ongkir untuk Wilayah Jember dan Sekitarnya',
            'banner'    => [
                
            ]
        ];

        return view('dashboard', compact('username', 'branding'));
    }

    public function pengelolaan(Request $request)
    {
        $username = session('username');
        if (!$username) {
            return redirect()->route('login')->with('message', 'Silakan login terlebih dahulu.');
        }

        $produk = [
            ['nama' => 'Nike Air Max', 'harga' => 1200000, 'stok' => 15, 'gambar' => 'nike-airmax.jpg'],
            ['nama' => 'Adidas Ultraboost', 'harga' => 1400000, 'stok' => 10, 'gambar' => 'adidas-ultraboost.jpg'],
            ['nama' => 'Converse All Star', 'harga' => 700000, 'stok' => 25, 'gambar' => 'converse-allstar.jpg'],
            ['nama' => 'Puma Rider', 'harga' => 850000, 'stok' => 20, 'gambar' => 'puma-rider.jpg'],
            ['nama' => 'New Balance 530', 'harga' => 1699000, 'stok' => 10, 'gambar' => 'new-balance-530.jpg'],
        ];

        $search = strtolower($request->get('search', ''));
        if (!empty($search)) {
            $produk = array_filter($produk, function ($item) use ($search) {
                return str_contains(strtolower($item['nama']), $search);
            });
        }

        return view('pengelolaan', compact('produk', 'username'));
    }

    public function profile()
    {
        $username = session('username');
        if (!$username) {
            return redirect()->route('login')->with('message', 'Silakan login terlebih dahulu.');
        }

        return view('profile', compact('username'));
    }

    public function logout()
    {
        session()->forget('username');
        session()->flush();

        return redirect()->route('login')->with('message', 'Berhasil logout!');
    }
}
