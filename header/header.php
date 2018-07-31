<div id="header1">
<div class="logoname">
	<img src="images/logo.png" alt="Logo" id="logo" style="margin-left: 2%">SkyNet
<sub style="font-size: 25px; text-shadow: none;">Cable & Broadband</sub>
</div>
<div class="logintab">
	<a href="registration2.php">New User</a>
	<a href="login.php">
    <?php
      include('lg.php');
    if(isset($_SESSION['login_user'])){
      echo "Profile";
    }else{
      echo"Login";
    }
    ?>
  </a>
</div>
</div>
<ul>
  <li><a href="index.php" title="Home"><img src="images/home2edit.png"></a></a></li><!--
  --><li class="dropdown">
    <a href="cabletv.php" title="CableTv" class="dropbtn">Digital-cable</a>
    <div class="dropdown-content">
      <a href="stb.php" title="SetTopBox">Products</a>
      <a href="channels.php" title="Channels">Channel-Packs</a>
    </div>
  </li><!--
  --><li class="dropdown">
    <a href="broadband.php" title="Broadband" class="dropbtn">Broadband</a>
    <div class="dropdown-content">
      <a href="internetpacks.php" title="Internet Packs">Internet Packs</a>
    </div>
  </li><!--
  --><li><a href="about.php" title="About Us">About</a></li><!--
  --><li><a href="contact.php" title="Contact">Contact us</a></li>
</ul>
  <div id="disclaimer">This website is still in 'beta' mode. Some functions may not be working yet. Please co-operate.</div>