@include('headerhome')
<div class="container p-5">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('save.details') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div><br>
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" required>
        </div><br>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div><br>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div><br>
        <div class="form-group">
            <label for="location">Select Location</label>
            <select class="form-control" id="location" name="location" required>
                <option value="">Select location</option>
                <option value="Mount Lavinia">Mount Lavinia</option>
                <option value="Colombo lighthouse clock tour">Colombo lighthouse clock tour</option>
                <option value="Colombo red mosque">Colombo red mosque</option>
                <option value="Hunupola garden">Hunupola garden</option>
                <option value="Gampaha garden">Gampaha garden</option>
                <option value="Gampaha jogging road">Gampaha jogging road</option>
                <option value="Seethawaka garden">Seethawaka garden</option>
                <option value="Galkissa beach">Galkissa beach</option>
                <option value="Wasana photo location Giridara">Wasana photo location Giridara</option>
                <option value="Green palace photo location">Green palace photo location</option>
                <option value="Hotel PHARO Nittambuwa">Hotel PHARO Nittambuwa</option>
                <option value="Visual village Negombo">Visual village Negombo</option>
                <option value="Chance palace Veyangoda">Chance palace Veyangoda</option>
                <option value="Attanagalla Rajamaha wiharaya">Attanagalla Rajamaha wiharaya</option>
                <option value="Kireetarama rajamaha wiharaya">Kireetarama rajamaha wiharaya</option>
                <option value="Nissarana arana">Nissarana arana</option>
                <!-- Add more locations as needed -->
            </select>
        </div><br>
        <div class="form-group">
            <label for="package">Select Package</label>
            <select class="form-control" id="package" name="package" required>
                <option value="">Choose...</option>
                <option value="Wedding photography">Wedding photography</option>
                <option value="Engagement photography">Engagement photography</option>
                <option value="Preeshoot photography">Preeshoot photography</option>
                <option value="Convercation photography">Convercation photography</option>
                <option value="Modeling photography">Modeling photography</option>
                <option value="Bride photography">Bride photography</option>
                <option value="Baby photography">Baby photography</option>
                <option value="Birthday photography">Birthday photography</option>
                <option value="Couple & single photography">Couple & single photography</option>
                <option value="Other Function photography">Other Function photography</option>
                <!-- Add more packages as needed -->
            </select>
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@include('footerhome')
