<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function roomList (Request $request) {
        $query = Room::query();
        $category = $request->get('category');

        if ($category) {
            $query = $query->where('category_id', $category);
        }

        $rooms = $query->orderBy('created_at', 'DESC')->paginate(9);
        return view('clients.room', ['rooms' => $rooms]);
    }
}
