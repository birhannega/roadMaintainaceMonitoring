<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/8/2018
 * Time: 7:44 PM
 */
?>
<div class="container" style="margin-top:2px">

    <div class="table-responsive">
        <div class="modal fade" id="staffregmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add new Employee <span></span></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <form class="form-group" action="<?php echo base_url('index.php/central/do_register');?>" method="post">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" name="FirstName" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>middle Name</label>
                                    <input class="form-control" name="middleName" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" name="LastName" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="FeMale">FeMale</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Birth Date</label>
                                    <input class="form-control" name="birthdate" data-type="date" />
                                </div>
                                <div class="form-group">
                                    <label>Hire Date</label>
                                    <input class="form-control" name="hiredate" data-type="date" />
                                </div>
                                <div class="form-group">
                                    <label>salary</label>
                                    <input class="form-control" name="salary" type="number" />
                                </div>
                                <div class="form-group">
                                    <label>Academic level</label>
                                    <select class="form-control" name="academic_level">
                                        <option>Degree</option>
                                        <option>certificate</option>
                                        <option>Msc</option>
                                        <option>Diploma</option>
                                    </select>
                                </div>
                                <button type="reset" class="btn btn-danger">reset form</button>
                                <button type="submit" class="btn btn-primary">Save Employee profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-responsive">
            <thead>
            <th colspan="8" >List of road assets
                <span class="pull-right" >
                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#staffregmodal">
                    Add new road
                    </button>
                </span>
            </th>
            </thead>
            <thead >
            <th >No.</th>
            <th >Road name</th>
            <th >Start point</th>
            <th >End point</th>
            <th >Length(km)</th>
            <th >Defect</th>
            <th >level of defect</th>
            <th >Portrait image</th>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Somalia street</td>
                <td>Paster</td>
                <td>kuas media</td>
                <td>2</td>
                <td>crack</td>
                <td>1</td>
                <td>1</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
