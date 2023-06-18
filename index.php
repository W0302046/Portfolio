<!DOCTYPE html>
<html>
<body>
    <div class="wrapper">
	
    <!-- Sidebar  -->
    <nav id="sidebar">
    <div class="sidebar-header">
    <h3>Daniel's Portfolio</h3>
    </div>

    <ul class="list-unstyled components">
    <p>Daniel's Portfolio</p>
    <li class="active">
    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
    <ul class="collapse list-unstyled" id="homeSubmenu">
    <li>
	<a href="Home2.html">Home</a> 
    </li>
    <li>
    <a href="#">Work Exp</a>
    </li>
    <li>
    <a href="School_Work.html">School Work</a>
    </li>
    </ul>
    </li>
                
    <li>
    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Videos Of Work</a>
    <ul class="collapse list-unstyled" id="pageSubmenu">
    <li>
    <a href="VideosOfWork\AppDisplay2022.mp4">App Display in Java</a>
    </li>
    <li>
    <a href="VideosOfWork\FunctionsPROG2007.mp4">Functions in C</a>
    </li>
    <li>
    <a href="VideosOfWork\AppDisplay2022.mp4">Small App Display</a>
    </li>
    </ul>
    </li>
	<li>
    <a href="#">Resume</a>
    </li>
    <li>
    <a href="#">About My Self</a>
    </li>
    <li>
    <a href="#">Contact Information</a>
    </li>
    </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

    <button type="button" id="sidebarCollapse" class="btn btn-info">
    <i class="fas fa-align-left"></i>
    <span>Toggle Sidebar</span>
    </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-align-justify"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav-right ml-auto">
    <li class="nav-item active">
    <a class="nav-link" href="#"></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#"></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#"></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#"></a>
    </li>
    </ul>
    </div>
    </div>
</nav>
			
			
<script 
	src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>