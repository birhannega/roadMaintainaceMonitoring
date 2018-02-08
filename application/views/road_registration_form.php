<div class="container" style="margin-top:-10px">
<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
  Register new road
</button>
<div class="table-responsive">
<h5 class="text-capitalize  text-muted">Addis ababa city administration/District road assets</h5>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register new road</h4>
      </div>
      <div class="modal-body">
        <form class="form-group" method="POST" action="">

        <div class="form-group">
        <label>District</label>
        <input class="form-control" name="district" />
       </div>
       
        <div class="form-group">
        <label>Road number</label>
        <input class="form-control" name="rnumber" />
       </div>

        <div class="form-group">
        <label>Road name</label>
        <input class="form-control" name="rname" />
       </div>
        <div class="form-group">
        <label>start Address</label>
        <input class="form-control" name="startPoint" />
       </div>

           <div class="form-group">
        <label>End address</label>
        <input class="form-control" name="endpoint" />
       </div>

       
        <div class="form-group">
        <label>District</label>
        <input class="form-control" name="district" />
       </div>
       
        <div class="form-group">
        <label>Road number</label>
        <input class="form-control" name="rnumber" />
       </div>

        <div class="form-group">
        <label>Road name</label>
        <input class="form-control" name="rname" />
       </div>
        <div class="form-group">
        <label>start Address</label>
        <input class="form-control" name="startPoint" />
       </div>

           <div class="form-group">
        <label>End address</label>
        <input class="form-control" name="endpoint" />
       </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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