<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:1024',
            'link' => 'nullable|url',
        ]);

        // Ambil data berdasarkan ID
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->fill($validated);

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolios', 'public');
            $portfolio->image = $imagePath;
        }

        // Simpan data
        $portfolio->save();

        return redirect()->route('portfolios.index')->with('success', 'Portofolio berhasil diperbarui!');
    }
}
