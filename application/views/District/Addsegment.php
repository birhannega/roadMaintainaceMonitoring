<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/11/2018
 * Time: 5:16 PM
 */
?>
<div class="container" style="margin-top: -5px">

    <div class="col-lg-6">
        <h4 class="text-muted">Segment management</h4>
        <div class="form-group">
            <form class="form-inline">
                <div class="form-group">
                    <label>Enter road number</label>
                    <input type="text" class="form-control" placeholder="Enter road number">
                    <input class="btn btn-info" type="submit">
                </div>

            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="bg-info">
                <th>#</th>
                <th>Road number</th>
                <th>Number of segments</th>
                <th>Actions</th>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="delete all segments"><span class="glyphicon glyphicon-trash"></span></button>
                        <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="view all segments"><span class="glyphicon glyphicon-eye-open"></span></button>
                        <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit segments"><span class="glyphicon glyphicon-edit"></span></button>

                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>