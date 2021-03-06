<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bluma css cdn -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  
  <!-- laravel css   -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- boostrap css cdn -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body>


<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="/admin">
      <b>Admin Control</b>
    </a>
    <div class="navbar-burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="/admin/users">
          Users
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="https://bulma.io/documentation/overview/start/">
            Active
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/overview/modifiers/">
            Inactive
          </a>
          
          
        </div>
      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="/admin/futsal">
         Futsals
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="https://bulma.io/documentation/overview/start/">
            Overview
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/overview/modifiers/">
            Modifiers
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
            Columns
          </a>
          
        </div>
        
      </div>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link" href="/admin/booking">
           Booking Request
          </a>
          <div class="navbar-dropdown is-boxed">
           
            <a class="navbar-item" href="/admin/booking/confirmedbooking">
             Confirmed Bookings
            </a>
            <a class="navbar-item" href="/admin/booking/closedbooking">
              Closed Bookings
            </a>
            
          </div>
         
         
        </div>
        <div class="navbar-item">
          <a style="text-decoration:none;color:black"  href="/">
          Homepage
          </a>
</div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          
          
        </div>
      </div>
    </div>
  </div>
</nav>
@yield('content')

  <script type="text/javascript">
$(document).on('change', '.custom-file-input', function (event) {
    $(this).next('.custom-file-label').html(event.target.files[0].name);
})
</style>

</body>
</html>