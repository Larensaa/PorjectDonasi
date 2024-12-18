<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Mengambil data dari model Portfolio dengan relasi user
        $portfolio = Portfolio::with('user')->get();

        // Menampilkan data di view
        return view('pages.portfolio', compact('portfolio'));
    }
}


