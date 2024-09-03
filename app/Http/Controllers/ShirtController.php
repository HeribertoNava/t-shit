<?php
namespace App\Http\Controllers;

use App\Models\Shirt;
use Illuminate\Http\Request;

class ShirtController extends Controller
{
    public function index()
    {
        $shirts = Shirt::all();
        return view('shirts.index', compact('shirts'));
    }

    public function show($id)
    {
        $shirt = Shirt::findOrFail($id);
        return view('shirts.show', compact('shirt'));
    }
}
