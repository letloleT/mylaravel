<nav class="navbar fixed-top scrolling-navbar navbar-expand-lg navbar-light bg-light" id="nav" >
  <a class="navbar-brand" href="#">Ultimate AC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown">Auction Categories</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Property</a>
          <a class="dropdown-item" href="#">Vehicles</a>
          <a class="dropdown-item" href="#">Livestock</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<script type="text/javascript">
  var nav = document.getElementById('nav');
  window.onscroll = function(){
    if(window.pageYOffset > 100){
      nav.style.background = "green";
    }else{
      nav.style.background = "transparent";
    }
  }
</script>