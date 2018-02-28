<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/10/2018
 * Time: 9:56 AM
 */?>
<div class="container">

    <div class="col-lg-12">


                    <table class="table  table-condensed table-bordered ">
                    <thead>
                    <th colspan="11" class="text-center text-capitalize text-info"> List of registered road assets </th>
                    </thead>

                    <thead>
                    <th>#</th>
                    <th>Road number</th>
                    <th>Road name</th>
                    <th>District</th>
                    <th>Length</th>
                    <th>Start point</th>
                    <th>End point</th>
                    <th># of segments</th>
                    <th  colspan="3">Actions</th>

                    </thead>
                    <tbody>
                    <?php
                    $roacounter=1;
                  foreach ($roads as $roadInfo)
                  {
                       echo "<tr>
                            <td>.$roacounter.</td> 
                            <td>.$roadInfo->road_number.</td>
                            <td>.$roadInfo->road_name.</td>
                            <td>.</td>
                            <td>.$roadInfo->measured_Length.</td>
                            <td>.$roadInfo->start_chainage.</td>
                            <td>.$roadInfo->End_chainage.</td>
                            <td>.$roadInfo->End_chainage.</td>
                              <td>
                                 <button onclick='viewdata($roadInfo->road_number)' class='btn btn-sm btn-primary' id='btnview'> <span class='glyphicon glyphicon-eye-open'></span> </button>
                              </td>
                                <td>
                                      <button onclick='editdata($roadInfo->road_number)' id='btnedit' class='btn btn-sm btn-warning' > <span class='glyphicon glyphicon-pencil'></span></button> 
                                </td>
                                <td>
                              <button onclick='deletedata($roadInfo->road_number)' id='btndel' class='btn btn-sm btn-danger' > <span class='glyphicon glyphicon-trash'></span> </button> 
                                </td>
                            </tr>";
                      $roacounter++;
                  }
                    ?>
                    </tbody>
                </table>

    </div>
    <div class="page-header text-center"> <h3 class="text-muted">Maintainance related reports</h3> </div>
    <div class="col-lg-12">
        <div class="col-lg-6">
            <div class="panel panel-success">
                <div class="panel-heading">Registered Road  Assets</div>
                <div class="panel-body">
                    <table class="table table-bordered ">

                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">Maintainance projects</div>
                <div class="panel-body">
                    <table class="table table-bordered ">

                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-warning">
                <div class="panel-heading">suspended Road  maintainance projects</div>
                <div class="panel-body">
                    <table class="table table-bordered ">

                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-danger">
                <div class="panel-heading"> <strong>Road  Assets in sever state</strong>
                    <small class="text-muted">These roads need urgent maintainace</small></div>
                <div class="panel-body">
                    <table class="table table-bordered ">

                    </table>
                </div>
            </div>
        </div>

    </div>






</div>
<script>

    function viewdata(id) {
        alert(id);

    }
    function editdata(id) {
     //alert("edi");

        alert(id);

    }
    function deletedata(id) {
        //  var url="<?php //echo base_url();?>///index.php/central/delete?id="+id;
        //console.log(url);
        $.ajax({
            type:'ajax',
            method:"GET",
            datatype:'String',
            async:'false',

            url: "<?php echo base_url()?>index.php/central/delete/"+id,
              success: function(response){
                alert('done');
            }});

    }
</script>
