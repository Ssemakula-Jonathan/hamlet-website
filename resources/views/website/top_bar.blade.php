<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <!-- <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">ademnea@cit.ac.ug</a>
            <i class="bi bi-phone-fill phone-icon"></i> +256 701909833 -->

            <!-- {{-- <h1 class="logo me-auto"><a href="/">HAMLET</a></h1> --}} -->
        <img class="hamletlogo" src="{{ asset('dash/HamletLogo.png') }}" alt="HAMLET">

   <!-- <nav class="navbar"> -->
     <!-- LOGO -->
     <!-- <div class="logo">MUO</div> -->
     <!-- NAVIGATION MENU -->
     <!-- <ul class="nav-links">  
       <input type="checkbox" id="checkbox_toggle" />
       <label for="checkbox_toggle" class="hamburger">&#9776;</label>
       
       <div class="menu">
         <li><a href="/">Home</a></li>
         <li><a href="/">About</a></li>
         
         <li class="services">
           <a href="/">Services</a>

             <ul class="dropdown">
             <li><a href="/">Dropdown 1 </a></li>
             <li><a href="/">Dropdown 2</a></li>
             <li><a href="/">Dropdown 2</a></li>
             <li><a href="/">Dropdown 3</a></li>
             <li><a href="/">Dropdown 4</a></li>
           </ul>
         </li>
         <li><a href="/">Pricing</a></li>
         <li><a href="/">Contact</a></li>
       </div>
     </ul> -->

   <!-- </nav>

        </div class="btn"> -->
        <!-- <div class="social-links d-none d-md-block">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div> -->
        
  <!-- <nav>
  <ul class="menu">
    <li class="logo"><a href="#">Creative Mind Agency</a></li>
    <li class="item"><a href="#">Home</a></li>
    <li class="item"><a href="#">About</a></li>
    <li class="item has-submenu">
      <a tabindex="0">Services</a>
      <ul class="submenu">
        <li class="subitem"><a href="#">Design</a></li>
        <li class="subitem"><a href="#">Development</a></li>
        <li class="subitem"><a href="#">SEO</a></li>
        <li class="subitem"><a href="#">Copywriting</a></li>
      </ul>
    </li>
    <li class="item has-submenu">
      <a tabindex="0">Plans</a>
      <ul class="submenu">
        <li class="subitem"><a href="#">Freelancer</a></li>
        <li class="subitem"><a href="#">Startup</a></li>
        <li class="subitem"><a href="#">Enterprise</a></li>
      </ul>
    </li>
    <li class="item"><a href="#">Blog</a></li>
    <li class="item"><a href="#">Contact</a>
    </li>
    <li class="item button"><a href="#">Log In</a></li>
    <li class="item button secondary"><a href="#">Sign Up</a></li>
    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav> -->





</div>
</div>




</section>

<style>

    /* Basic styling */

  img{
    max-width: 100%;
    max-height: 100%;
  }
  
    .hamletlogo{
    width: 200px;
    height: 29.86px;
  }

 /* UTILITIES */
* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}
body {
 font-family: cursive;
}
a {
 text-decoration: none;
}
li {
 list-style: none;
}

/* NAVBAR STYLING STARTS */
.navbar {
 display: flex;
 align-items: center;
 justify-content: space-between;
 padding: 20px;
 background-color: teal;
 color: #fff;
}
.nav-links a {
 color: #fff;
}
/* LOGO */
.logo {
 font-size: 32px;
}
/* NAVBAR MENU */
.menu {
 display: flex;
 gap: 1em;
 font-size: 18px;
}
.menu li:hover {
 background-color: #4c9e9e;
 border-radius: 5px;
 transition: 0.3s ease;
}
.menu li {
 padding: 5px 14px;
}
/* DROPDOWN MENU */
.services {
 position: relative; 
}
.dropdown {
 background-color: rgb(1, 139, 139);
 padding: 1em 0;
 position: absolute; /*WITH RESPECT TO PARENT*/
 display: none;
 border-radius: 8px;
 top: 35px;
}
.dropdown li + li {
 margin-top: 10px;
}
.dropdown li {
 padding: 0.5em 1em;
 width: 8em;
 text-align: center;
}
.dropdown li:hover {
 background-color: #4c9e9e;
}
.services:hover .dropdown {
 display: block;
}

/*RESPONSIVE NAVBAR MENU STARTS*/
/* CHECKBOX HACK */
input[type=checkbox]{
 display: none;
} 
/*HAMBURGER MENU*/
.hamburger {
 display: none;
 font-size: 24px;
 user-select: none;
}
/* APPLYING MEDIA QUERIES */
@media (max-width: 768px) {
.menu { 
 display:none;
 position: absolute;
 background-color:teal;
 right: 0;
 left: 0;
 text-align: center;
 padding: 16px 0;
}
.menu li:hover {
 display: inline-block;
 background-color:#4c9e9e;
 transition: 0.3s ease;
}
.menu li + li {
 margin-top: 12px;
}
input[type=checkbox]:checked ~ .menu{
 display: block;
}
.hamburger {
 display: block;
}
.dropdown {
 left: 50%;
 top: 30px;
 transform: translateX(35%);
}
.dropdown li:hover {
 background-color: #4c9e9e;
}
}



</style>

