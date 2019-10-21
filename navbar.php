<!--FIXED NAVIGATION BAR-->
<div class="navbar-fixed">
<nav class="nav-extended navbar-offset">
<div class="nav-wrapper">
<a href="#" class="brand-logo"><img src="img/header.png" class="responsive-image hide-on-med-and-down"><span class="hide-on-large-only">CNC INSTITUTE</span></a>
<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
<ul id="nav-mobile" class="right hide-on-med-and-down">
<li><a class="dropdown-trigger" href="" data-target='dropdown2'>English</a></li>
<li><a class="dropdown-trigger" href="" data-target='dropdown1'>Resourses<i class="material-icons right">arrow_drop_down</i></a></li>
<li><?php include 'userBtn.php' ?></li>
</ul>
</div>
<div class="nav-content">
<ul class="tabs tabs-transparent">
<li class="tab"><a href="index.php">Home</a></li>
<li class="tab"><a href="about.php">About</a></li>
<li class="tab"><a href="reserve.php">Reservations</a></li>
<li class="tab"></li>
</ul>
</div>
</nav>
</div>

<!--MOBILE NAVIGATION BAR-->
<ul class="sidenav" id="mobile-demo">
<li><a href="reserve.php">RESERVE</a></li>
<li><a href="#">PASTPAPERS</a></li>
<li><a href="#">TUTORIALS</a></li>
</ul>
<!--NAVIGATION BAR DROPDOWN-->
<ul id='dropdown1' class='dropdown-content'>
<li><a href="#!">Pastpapers</a></li>
<li class="divider" tabindex="-1"></li>
<li><a href="#!">Tutorials</a></li>
</ul>

<ul id='dropdown2' class='dropdown-content'>
<li><a href="#!">Sinhala</a></li>
<li class="divider" tabindex="-1"></li>
<li><a href="#!">Tamil</a></li>
</ul>