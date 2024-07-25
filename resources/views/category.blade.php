@include('header')

<div class="container p-5">

<header class="bg-body-secondary text-center py-5">
<div class="container">
<h1 class="display-4">CATEGORY & PACKEGES</h1>
</div>
<br>
</header>
 <hr style="border: none; height: 2px; background-color: black;">
<h4 >CATEGORY</h4>


<div class="row">
    <div class="col-8"></div>
    <div class="col-4">
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Category
</button>


    </div>
  </div>

<br><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Catagory</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Photo-01</th>
      <th scope="col">Photo-02</th>
      <th scope="col">Photo-03</th>
      <th scope="col">Photo-04</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>Wedding photography</td>
      <td><p class="card-text">-16*24 COUPLE ENLARGEMENT PHOTO 04 WITH GLASS & FRAME<br>-17*24 MAGAZIN ALBUM<br>
    -12*18 GROUP PHOTO 02<br>-THANK YOU CARD 200<br>-ONE DAY PREESHOOT FREE<br>-8*24 PREESHOOT ALBUM
    <br>ALL HIGH RESOLUTION IMAGE</p><br>-16*24 COUPLE ENLARGEMENT PHOTO 02 WITH GLASS & FRAME<br>-17*24 MAGAZIN ALBUM<br>
    -12*18 GROUP PHOTO 02<br>-THANK YOU CARD 200<br>-ONE DAY PREESHOOT FREE<br>-8*24 PREESHOOT ALBUM
    <br>ALL HIGH RESOLUTION IMAGE</p><br>-16*24 COUPLE ENLARGEMENT PHOTO 02 WITH GLASS & FRAME<br>
    -THANK YOU CARD 100<br>-17*24 MAGAZIN ALBUM
    <br>ALL HIGH RESOLUTION IMAGE<br></th>
      <td>Rs 200 000/=<br><br><br><br><br><br><br>Rs 150 000/=<br><br><br><br><br><br><br>Rs 120 000/=</td>
      <td><img src="{{ url('images/wedding.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/wedding2.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/wedding3.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/wedding4.jpg') }}" class="card-img-top" alt="..."></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>    
    </tr>
    <tr>
    <td>Engagement photography</td>
      <td>-16*24 COUPLE ENLARGEMENT PHOTO 02 WITH GLASS & FRAME<br>-MORNING SHOOT<br>
    >-8*24 MAGAZIN ALBUM<br>ALL HIGH RESOLUTION IMAGE</p><br>-MORNING SHOOT<br>ALL HIGH RESOLUTION IMAGE</p></th>
      <td>Rs 55 000/=<br><br><br><br><br><br>Rs 20 000/=</td>
      <td><img src="{{ url('images/3e.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/4e.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/1e.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/2e.jpg') }}" class="card-img-top" alt="..."></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>    
    </tr>
    <tr>
    <td>Preeshoot photography</td>
      <td>ALL HIGH RESOLUTION IMAGE</th>
      <td>Rs 20 000/=</td>
      <td><img src="{{ url('images/p1.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/p2.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/p3.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/p4.jpg') }}" class="card-img-top" alt="..."></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>    
    </tr>
    <tr>
    <td>Convercation photography</td>
      <td>-UNLIMITED PHOTOS & FULLY EDITED SOFTCOPIES(1 HOURS)</p><br>-COUPLE<br>-UNLIMITED PHOTOS & FULLY EDITED SOFTCOPIES(1 HOURS)</p><br>
      FIVE PERSON<br> PERSON-UNLIMITED PHOTOS & FULLY EDITED SOFTCOPIES(2 HOURS)</p><br>TEN PERSON ALL HIGH RESOLUTION IMAGE</p></th>
      <td>Rs 8 000/=<br><br>Rs 10 000/=<br><br>Rs 3 500/=(PER PERSON)<br><br>Rs 2 500/=(PER PERSON)</td>
      <td><img src="{{ url('images/c1.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/c2.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/c3.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/c4.jpg') }}" class="card-img-top" alt="..."></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>    
    </tr>
    <tr>
    <td>Modeling photography</td>
      <td>-ALL HIGH RESOLUTION IMAGE</th>
      <td>Rs 10 000/=</td>
      <td><img src="{{ url('images/m1.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/m2.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/m3.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/m4.jpg') }}" class="card-img-top" alt="..."></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>    
    </tr>
    <tr>
    <td>Bride photography</td>
      <td>-ALL HIGH RESOLUTION IMAGE</th>
      <td>Rs 8 000/=</td>
      <td><img src="{{ url('images/b1.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/b2.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/b3.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/b4.jpg') }}" class="card-img-top" alt="..."></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>    
    </tr>
    <tr>
    <td>Baby photography</td>
      <td>-ALL HIGH RESOLUTION IMAGE</th>
      <td>Rs 10 000/=</td>
      <td><img src="{{ url('images/ba1.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/ba2.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/ba3.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/ba4.jpg') }}" class="card-img-top" alt="..."></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>    
    </tr>
    <tr>
    <td>Birthday photography</td>
      <td>-ALL HIGH RESOLUTION IMAGE</th>
      <td>Rs 12 000/=</td>
      <td><img src="{{ url('images/bi1.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/bi2.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/bi3.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/bi4.jpg') }}" class="card-img-top" alt="..."></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>    
    </tr>
    <tr>
    <td>Couple & single photography</td>
      <td>SINGLE<br>-ALL HIGH RESOLUTION IMAGE<br>COUPLE<br>-ALL HIGH RESOLUTION IMAGE</th>
      <td>Rs 8 000/=<br><br>Rs 15 000/=</td>
      <td><img src="{{ url('images/s1.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/s2.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/s3.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/s4.jpg') }}" class="card-img-top" alt="..."></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>    
    </tr>
    <tr>
    <td>Other Function photography</td>
      <td>-ALL HIGH RESOLUTION IMAGE</th>
      <td>Rs 25 000/=</td>
      <td><img src="{{ url('images/o1.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/o2.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/o3.jpg') }}" class="card-img-top" alt="..."></td>
      <td><img src="{{ url('images/o4.jpg') }}" class="card-img-top" alt="..."></td>
      <td>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Catagory</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
  </div>
  
  <div class="mb-3">
  <label for="image" class="col-form-label">Upload image 01</label><br>
  <input type="file" name="image1" id="image1" required class="class form-control">
  </div>

  <div class="mb-3">
  <label for="image" class="col-form-label">Upload image 02</label><br>
  <input type="file" name="image1" id="image1" required class="class form-control">
  </div>

  <div class="mb-3">
  <label for="image" class="col-form-label">Upload image 03</label><br>
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


<div id="carouselExampleDark" class="carousel carousel-dark slide" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="10" aria-label="Slide 11"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ url('images/5.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ url('images/4.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('images/1.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ url('images/2.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ url('images/3.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ url('images/6.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ url('images/7.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ url('images/8.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ url('images/9.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ url('images/10.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ url('images/11.jpg') }}" width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
@include('footer')