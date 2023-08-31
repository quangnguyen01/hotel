<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('admin.rooms.form', ['data' => null, 'category' => $category]);
    }

    public function store(RoomRequest $request)
    {
        $request->validated();

        $room = new Room();
        $room->name = $request->name;
        $room->description = $request->description;
        $room->price = $request->price;
        $room->category_id = $request->category_id;
        $room->images = $request->images;
        $room->content = $request->room_content;
        $room->save();

        return redirect()->route('listRoom')
            ->with('success', 'Thêm mới thành công.');
    }

    public function list(Request $request)
    {
        $queryBuilder = Room::query()->with(['category']);
        $search = $request->get('search');
        $sort = $request->get('sort');
        $category = $request->get('category');
        $status = $request->get('status');
        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        if ($category) {
            $queryBuilder = $queryBuilder->where('category_id',$category);
        }
        if ($status) {
            $queryBuilder = $queryBuilder->where('status', $status);
        }
        $data = $queryBuilder->orderBy('created_at','DESC')->paginate(10)->appends(['search' => $search, 'category' => $category, 'status' => $status]);
        return view('admin.rooms.table', [
            'rooms' => $data,
            'sort' => $sort,
            'categories' => $category,
            'status' => $status,
        ]);

    }

    public function edit($id)
    {
        $category = Category::all();
        $rooms = Room::find($id);
        return view('admin.Rooms.form', ['data' => $rooms, 'category' => $category]);
    }

    public function save(RoomRequest $request, $id)
    {
        $request->validated();
        $room = Room::find($id);
        $room->images = $request->images;
        $room->name = $request->name;
        $room->price = $request->price;
        $room->description = $request->description;
        $room->content = $request->room_content;
        $room->category_id = $request->category_id;
        $room->save();

        return redirect()->route('listRoom')->with('success', 'Update thành công.');
    }

    public function delete($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect()->route('listRoom')
            ->with('success', 'Xoá thành công.');
    }

    public function manager(Request $request)
    {
        $queryBuilder = Room::query();
        $search = $request->get('search');
        $category = $request->get('category');
        $status = $request->get('status');
        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%');
        }
        if ($category) {
            $queryBuilder = $queryBuilder->where('category_id',$category);
        }
        if ($status) {
            $queryBuilder = $queryBuilder->where('status', $status);
        }
        $data = $queryBuilder->orderBy('created_at','DESC')->get();
        return view('admin.rooms.manager', [
            'rooms' => $data,
            'categories' => $category,
            'status' => $status,
        ]);

    }
}
