@include('header')
<div class="container p-5">

<header class="bg-body-secondary text-center py-5">
<div class="container">
<h1 class="display-4">Location</h1>
</div>
<br>
</header>
 <hr style="border: none; height: 2px; background-color: black;">
<h4 >LOCATION</h4>


<div class="row">
    <div class="col-8"></div>
    <div class="col-4">
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Location
</button>


    </div>
  </div>

<br><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Town</th>
      <th scope="col">image 01</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mount Lavinia</td>
      <td>Dehiwala</td>
      <td><img src="{{ url('images/mount lavinia.jpeg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
     <td>lighthouse clock tour</td>
      <td>Colombo</td>
      <td><img src="{{ url('images/colombo 2.jpeg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
      <td>red mosque</td>
      <td>Colombo</td>
      <td><img src="{{ url('images/red mosque.jpg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
      <td>hunupola garden</td>
      <td>Attanagalla</td>
      <td>3</td>
      </tr>
      <tr>
      <td>Botanical garden</td>
      <td>Gampaha</td>
      <td>3</td>
      </tr>
      <tr>
       <td>jogging road</td>
      <td>Gampaha</td>
      <td><img src="{{ url('images/gampaha.jpg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
      <td>Botanical garden</td>
      <td>Seethawaka</td>
      <td><img src="{{ url('images/srrthawaka.jpg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
      <td>beach side</td>
      <td>Galkissa</td>
      <td><img src="{{ url('images/galkissa.jpg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
      <td>Wasana photo location</td>
      <td>Giridara</td>
      <td><img src="{{ url('images/wasana photo location.jpeg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
      <td>Green palace photo location</td>
      <td>Attanagalla</td>
      <td>3</td>
      </tr>
      <tr>
      <td>Hotel PHARO</td>
      <td>Nittambuwa</td>
      <td><img src="{{ url('images/paroo.webp') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
     <td>Hotel SANUSHI</td>
      <td>Attanagalla</td>
      <td><img src="{{ url('images/sanushi.jpg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
      <td>visual village</td>
      <td>Negombo</td>
      <td><img src="{{ url('images/visual village negombo.jpg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
     <td>Chance palace</td>
      <td>Veyangoda</td>
      <td><img src="{{ url('images/chancepalace.jpeg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
      <td>Attanagalla Rajamaha wiharaya</td>
      <td>Attanagalla</td>
      <td><img src="{{ url('images/attanagalla.jpg') }}" class="card-img-top" alt="..."></td>
      </tr>
      <tr>
      <td>Kireetarama rajamaha wiharaya</td>
      <td>Udammita</td>
      <td><img src="{{ url('images/kireetaramaya.jpeg') }}" class="card-img-top" alt="..."></td>
      </tr>
       <tr>
      <td>Nissarana arana</td>
      <td>Kirindiwela</td>
      <td><img src="{{ url('images/nissarana.jpg') }}" class="card-img-top" alt="..."></td>
      </tr>
      
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>    
    </tr>
    </tbody>
    </table>
    
    
   


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add location</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Location Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  
  <div class="mb-3">
  <label for="image" class="col-form-label">Image 01</label><br>
  <input type="file" name="image1" id="image1" required class="class form-control">
  </div>


</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@include('footer')