@include('headerhome')



<header>
 
  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('images/homebg1.jpg');
      height: 600px;
      background-size: cover;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">SUDESH NIRMAL </h1>
          <h4 class="mb-3">PHOYOGRAPHY</h4>
          <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="{{ route('bookinghome') }}" role="button"
          >Book now !</a><br><br>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>


@include('footerhome')