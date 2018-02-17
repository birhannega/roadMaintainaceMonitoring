<?php
if($this->session->userdata("central")==null &&$this->session->userdata("role")==null )
{
    redirect(base_url());
}else
{
?>

<div class="container-fluid" style="margin-top:-18px">
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand pull-right" href="#">RMTS </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false">Inventry management <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
           
            <li><a href="<?php echo base_url("index.php/central/ListAllroads"); ?>">Road Assets</a></li>
            <li><a href="<?php echo base_url("index.php/central/production"); ?>">Production plant</a></li>
             <li><a href="<?php echo base_url("index.php/central/laboratories"); ?>">Laboratories</a></li>
              <li><a href="<?php echo base_url("index.php/central/Machinery"); ?>">Machinery and Equipments</a></li>

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false"> Staff Management<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/central/hireEmployee"); ?>">Register new Member</a></li>
              <li><a href="<?php echo base_url("index.php/central/Employeeprofile"); ?>">view Active Members</a></li>
            <li><a href="<?php echo base_url("index.php/central/resignEmployee"); ?>">Resign Member</a></li>
              <li><a href="<?php echo base_url("index.php/central/AddUser"); ?>">create user account</a></li>
            <li><a href="<?php echo base_url("index.php/central/employeeReport"); ?>">Staff report</a></li>
          
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false"> Maintainance management<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="<?php echo base_url("index.php/central/ongoingprojects"); ?>">Ongoing Maintainance projects</a></li>
            <li><a href="<?php echo base_url("index.php/central/Delayedprojects"); ?>">Delayed maintainances projects</a></li>
             <li><a href="<?php echo base_url("index.php/central/suspendedprojects"); ?>">Suspended maintainace projects</a></li>
              <li><a href="<?php echo base_url("index.php/central/finishedprojects"); ?>">Finished maintainace projects</a></li>
           
           
          </ul>
        </li>
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false">Budget management<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="<?php echo base_url("index.php/central/budget"); ?>">Maintainace Budget management</a></li>
            <li><a href="<?php echo base_url("index.php/central/machineries"); ?>">machinery budget management</a></li>
             <li><a href="<?php echo base_url("index.php/central/materials"); ?>">Construction materials budget</a></li>
          </ul>
        </li>
          
         
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false"> District Management<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/central/addDistrict"); ?>">Register new District</a></li>
               <li><a href="<?php echo base_url("index.php/central/viewDisricts"); ?>">view Registered Districts</a></li>
            <li><a href="<?php echo base_url("index.php/central/reportsbyDistrict"); ?>">Reports by  district</a></li>  
          
          </ul>
        </li>


      </ul>
      
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false"> Welcome <?php echo $this->session->userdata('user');?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a  href="<?php echo base_url("index.php/central/myprofile"); ?>">My profile</a></li>
               <li><a href="<?php echo base_url("index.php/central/changepassword"); ?>">Change Password</a></li>
            <li><a href="<?php echo base_url("index.php/central/logout"); ?>">Logout</a></li>
          
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<?php
}
?>