@extends("layouts.main")

@section("form")

<h1>Registration Form</h1><hr>
<h3>Please insert the informations bellow:</h3>

<form method="POST" action={{route('booking.store')}}>

    @csrf
    {{-- <input type="text" name="guest_full_name" placeholder="Full Name"><br><br>

    <input type="text" name="guest_credit_card" placeholder="Credit Card"><br><br>

    <input type="text" name="room" placeholder="Room"><br><br>
    <input type="string" name="from_date" placeholder="From Date"><br><br>

    <input type="string" name="to_date" placeholder="To Date"><br><br>

    <input type="text" name="more_details" placeholder="More Details"> --}}

    <div class="container">
        <div>
            <label for="fullname"><strong>Full Name</strong></label>
            <input type="text" placeholder="Enter Fullname" name="fullname" required>
        </div>
        <div>
            <label for="creditcard"><strong>Num Credit Card</strong></label>
            <input type="text" placeholder="Enter num Credit Card" name="creditcard" required>
        </div>
        <div>
            <label for="room"><strong>Room</strong></label>
            <input type="text" placeholder="Enter Room" name="room" required>
        </div>
        <label for="fromdate"><strong>Start date:</strong></label>
        <input
            type="date"
            id="fromdate"
            name="fromdate"
            value="{{ date('d-m-Y') }}"
            min="2018-01-01"
            max="2100-12-31">
        <label for="todate"><strong>To date:</strong></label>
        <input
            type="date"
            id="todate"
            name="todate"
            value="{{ date('d-m-Y') }}"
            min="2018-01-01"
            max="2100-12-31">
        <div>
            <label for="moredetails"><strong>More Details</strong></label>
        </div>
        <textarea id="w3review" name="moredetails" rows="4" cols="50">
        </textarea>
    </div>

    <button type="submit">
        Registrati!
    </button>
</form>

@stop