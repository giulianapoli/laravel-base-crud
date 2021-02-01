@extends('layouts.main')

@section('content')

<button>
    <a href="{{route('booking.create')}}">Registrati!</a>
</button>

<table>
    <thead>
        <tr>
            <th> id</th>
            <th> guest_name</th>
            <th> guest_CreditCard </th>
            <th> room </th>
            <th> from_date</th>
            <th> to_date </th>
            <th>More Details</th>
        </tr>
    </thead>
    <tbody>
         @foreach($bookings as $booking)
          <tr>
            <td> {{$booking->id}} </td>
            <td> {{$booking->guest_full_name}} </td>
            <td> {{$booking->guest_credit_card}} </td>
            <td> {{$booking->room}} </td>
            <td> {{$booking->from_date}} </td>
            <td> {{$booking->to_date}} </td>
            <td><a href="{{route('booking.show', $booking->id)}}">Dettagli</a></td>
          </tr>
         @endforeach
   </tbody>
</table>

@endsection