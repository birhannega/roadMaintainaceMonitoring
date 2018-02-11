<div class="container" style="margin-top:-10px">

<div class="col-lg-12 " >
    <h3 class=" text-success text-muted">New Road registration form</h3>
    <strong>
        <?php
        if($this->session->flashdata('message')!=null)
        {
            echo $this->session->flashdata('message');
        }
        ?>
    </strong>
    <form   class="form-group" method="post" action="<?php echo base_url('index.php/District/do_Add_road')?>" >
        <div class="form-group col-sm-4">
            <label class="text-muted" for="roadnumber">road_number</label class="text-muted">
            <input type="number" class="form-control" id="roadnumber" name="roadnumber" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">road name</label class="text-muted">
            <input type="text" class="form-control" name="road_name" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">origin</label class="text-muted">
            <input type="text" class="form-control" name="origin" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">block_number</label class="text-muted">
            <input type="number" class="form-control" name="block_number" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted"> measured_Length</label class="text-muted">
            <input type="number" class="form-control" name="measured_Length" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">start_chainage</label class="text-muted">
            <input type="text" class="form-control" name="start_chainage" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">start_description</label class="text-muted">
            <input type="text" class="form-control" name="start_description" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted"> End_chainage</label class="text-muted">
            <input type="text" class="form-control" name="End_chainage" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">End_description</label class="text-muted">
            <input type="text" class="form-control" name="End_description" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">surface_type</label class="text-muted">
            <input type="text" class="form-control" name="surface_type" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">surface_width</label class="text-muted">
            <input type="number" class="form-control" name="surface_width" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">carriage_way</label class="text-muted">
            <input type="text" class="form-control" name="carriage_way" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">no_lanes</label class="text-muted">
            <input type="number" class="form-control" name="no_lanes" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">no_ways</label class="text-muted">
            <input type="number" class="form-control" name="no_ways" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">sub_city</label class="text-muted">
            <input type="number" class="form-control" name="sub_city_ID" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">Start_code</label class="text-muted">
            <input type="number" class="form-control" name="Start_code" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">end_code</label class="text-muted">
            <input type="number" class="form-control" name="end_code" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">road_class</label class="text-muted">
            <input type="number" class="form-control" name="road_class_ID" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">rates</label class="text-muted">
            <input type="number" class="form-control" name="rate" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">survey_date</label class="text-muted">
            <input type="date" class="form-control" name="survey_date" />
        </div>
        <div class="form-group col-sm-4">
            <label class="text-muted">District</label class="text-muted">
            <input type="number" class="form-control" name="District_id" />
        </div>
        <input type="submit" class="btn btn-primary" value="Register road" />
    </form>

<!--<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
  Register new road
</button>-->


</div>
    <div class="col-lg-12">

<div class="table-responsive">
<h4 class="text-capitalize  text-muted">Addis ababa city administration/District road assets</h4>
        <table class="table table-striped">
            <thead>
            <th>#</th>
            <th>Road number</th>
            <th>Road name</th>
            <th>Start point</th>
            <th>End point</th>
            <th>No. segments</th>
            <th>Date registered</th>
            <th colspan="3">Action</th>
            </thead>
            <tbody></tbody>
            <tfoot></tfoot>
        </table>
    </div>



</div>
</div>