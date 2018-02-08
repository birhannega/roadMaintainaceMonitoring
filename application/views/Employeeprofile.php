<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/7/2018
 * Time: 1:43 PM
 */
?>

<div class="container" style="margin-top:-20px">

<div class="col-lg-12">

<p class="text-info">List of Employee and their profile</p>
    <div id="fullprofile"></div>
    <div class="table table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <th>#</th>
            <th>Full name</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Hire Date</th>
            <th>Salary</th>
            <th>Academic Level</th>
            <th colspan="2">Action</th>
            </thead>
            <tbody>
            <?php
              $counter=1;
            foreach ($empdata as $employee)
            {
                echo  "<tr>
                      <td>".$counter."</td>
                        <td class='text-capitalize'>".$employee->First_name." ".$employee->Middle_name." ".$employee->Last_name."</td>
                         <td>".$employee->Gender."</td>
                          <td>".$employee->Birth_date."</td>
                           <td>".$employee->Hire_date."</td>
                            <td>".$employee->salary."</td>
                             <td>".$employee->academic_level."</td>
                             <td>
                             <form>
                             <button class='btn btn-danger btn-sm'>
                             <span class='glyphicon glyphicon-trash'></span>
                             </button>
                             </form></td>
                             <td>
                              <form>
                              
                             <button class='btn btn-info btn-sm'>
                             <span class='glyphicon glyphicon-eye-open'></span>
                             </button>
                             </form>
                             </td>
                      </tr>";
                $counter++;
            }

            ?>
            </tbody>
        </table>
    </div>


</div>
</div>