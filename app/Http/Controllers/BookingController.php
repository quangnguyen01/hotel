<?php

namespace App\Http\Controllers;

use App\Enums\BookingStatus;
use App\Enums\RoomStatus;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function store(BookingRequest $request) {
        $request->validated();
        $booking = new Booking();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->adult = $request->adult;
        $booking->child = $request->child;
        $booking->check_in_date = $request->check_in_date;
        $booking->check_in_time = $request->check_in_time;
        $booking->check_out_date = $request->check_out_date;
        $booking->check_out_time = $request->check_out_time;
        $booking->special_request = $request->special_request;
        $booking->room_id = $request->room_id;
        $booking->unit_price = $request->price * $this->diffDay($request->check_in_date, $request->check_out_date);
        $booking->save();
        return redirect()->route($request->route)
            ->with('success', 'Thêm mới thành công.');
    }

    public function list (Request $request) {
        $queryBuilder = Booking::query();
        $search = $request->get('search');
        $sort = $request->get('sort');
        $status = $request->get('status');
        $start = $request->get('start_date');
        $end = $request->get('end_date');

        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('unit_price', 'like', '%' . $search . '%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        if ($status) {
            $queryBuilder = $queryBuilder->where('status', $status);
        }
        if ($start && $end) {
            $queryBuilder = $queryBuilder->where('check_in_date',  '<=', $start)->where('check_out_date', '>=', $end);
        }
        $data = $queryBuilder->orderBy('created_at', 'DESC')->paginate(10)->appends(['search' => $search, 'status' => $status, 'start' => $start, 'end' => $end]);
        return view('admin.bookings.table', [
            'bookings' => $data,
            'status' => $status,
            'sort' => $sort,
            'startDate' => $start,
            'endDate' => $end,
        ]);
    }

    public function updateStatus (Request $request) {
        foreach (json_decode($request->array_id) as $item) {
            $booking = Booking::find($item);
            if ($request->desire == 5) {
                $booking->delete();
            }
            else {
                $booking->status = (int)$request->desire;
                $booking->save();
                $room = Room::find($booking->room_id);
                switch($booking->status) {
                    case(BookingStatus::PENDING):
                        $room->status = RoomStatus::INACTIVE;
                        break;
                    case(BookingStatus::CONFIRM):
                        $room->status = RoomStatus::BOOKED;
                        break;
                    case(BookingStatus::ACTIVE):
                        $room->status = RoomStatus::ACTIVE;
                        break;
                    case(BookingStatus::PAID):
                        $room->status = RoomStatus::INACTIVE;
                        break;
                }
                $room->save();
            }
        }
        return back()->with(['status' => 'Cập nhập thành công']);
    }

    public function delete($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('listBooking')->with(['status' => 'Delete booking success']);
    }

    public function show($id) {
        $booking = Booking::find($id);
        return view('admin.bookings.detail', [
            'booking' => $booking
        ]);
    }

    function diffDay ($startDate, $endDate) {
        $start = Carbon::parse($startDate);
        $end = Carbon::parse($endDate);
        return $start->diffInDays($end);
    }
}
