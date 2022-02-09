<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        return view('favorite', ['favorites' => Favorite::where('user_id', $user->id)->get()]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        Favorite::firstOrCreate([
            'user_id' => $user->id,
            'contact_id' => $request->input('contact_id')
        ]);

        return response()->json('Контакт добавлен в избранное');
    }
}
