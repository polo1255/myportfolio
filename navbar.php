<?php 
    session_start(); 
    require_once 'db.php';
    ?>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Portfolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="introduction.php">Introduction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="attitude.php">Attitude</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Activity & Certificate</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="activity.php">Activity</a></li>
            <li><a class="dropdown-item" href="certificate.php">Certificate</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Sign-up & Log-in</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="register.php">Sign-up</a></li>
            <li><a class="dropdown-item" href="login.php">Log-in</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="nav navbar-nav navbar-right">
            <a class="btn btn-outline-danger navbar-btn" href="logout.php">Logout</a>
        </ul>
    </div>
  </div>
</nav>