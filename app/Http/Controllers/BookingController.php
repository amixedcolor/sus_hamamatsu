<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\SelectedFacility;

class BookingController extends Controller
{
    public function store(Request $req, string $id) {
        $params = json_decode($req->request->get('params'), true);

        $booking = new Booking;

        $booking->school_id = $id;
        $booking->customer_name = $params['customer_name'];
        $booking->phone_number = $params['phone_number'];
        $booking->email = $params['email'];
        $booking->date = $params['date'];
        $booking->time_start = $params['time_start'];
        $booking->time_end = $params['time_end'];
        $booking->purpose_of_use = $params['purpose_of_use'];
        $booking->details = $params['details'];

        $booking->save();

        $selectedFacility = new SelectedFacility;

        $selectedFacility->booking_id = $booking->id;
        $selectedFacility->is_having_gym = array_key_exists('selectedFacility_is_having_gym', $params);
        $selectedFacility->is_having_ground = array_key_exists('selectedFacility_is_having_ground', $params);
        $selectedFacility->is_having_parking = array_key_exists('selectedFacility_is_having_parking', $params);

        $selectedFacility->save();

        return view('booking-completion');
    }
}
