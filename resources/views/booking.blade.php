@include('header')

<div class="container p-5">

<header class="bg-body-secondary text-center py-5">
<div class="container">
<h1 class="display-4">BOOKING</h1>
</div>
<br>
</header>
 <hr style="border: none; height: 2px; background-color: black;">
<h4 >Bookings</h4>

<body>

<br><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Client ID</th>
      <th scope="col">Client Name</th>
      <th scope="col">Client Contact</th>
      <th scope="col">Client Email</th>
      <th scope="col">Location</th>
      <th scope="col">Package</th>
      <th scope="col">Booking Date</th>
      <th scope="col">Received Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->client_name }}</td>
                        <td>{{ $booking->client_contact }}</td>
                        <td>{{ $booking->client_email }}</td>                       
                        <td>{{ $booking->location }}</td>
                        <td>{{ $booking->package2 }}</td>
                        <td>{{ $booking->date }}</td>
                        <td>{{ $booking->created_at }}</td>
                    </tr>
                @endforeach


</body>

</html>