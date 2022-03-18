<!--Header Section-->
<?php
include ('../actions/connect.php');
include 'header.php';
?>
<div class="card my-3 table-responsive">
    <div class="card-header fw-bold" style="background:#8c19c2;">
        <div class="row">
            <div class="col-md-4 text-left text-light">
                <h3>Buses</h3>
            </div>
            <div class="col-md-4 text-center">

            </div>
            <div class="col-md-4 text-center">
                <!-- Modal  For Adding New buses-->
                <form action="actions/add_bus.php" method="POST" enctype="multipart/form-data" lass="p-3">
                    <div class="modal fade" id="addnew" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background:#8c19c2; color: white;">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Bus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-80 m-auto" name="branch"
                                            placeholder="Branch" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-80 m-auto" name="regno"
                                            placeholder="Reg. NO" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-80 m-auto" name="yop"
                                            placeholder="Year of Purchase" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-80 m-auto" name="color"
                                            placeholder="Color" required="required">
                                    </div>
                                </div>
                                <div class="modal-footer" style="background:#8c19c2; color: white;">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-success">Save changes</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </form>
                <!--Add New admins Button-->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-light my-3" data-toggle="modal" data-target="#addnew"
                    style="color:#8c19c2">
                    <i class="bi bi-person-plus"></i> Add New
                </button>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Branch</th>
                <th scope="col">Reg No</th>
                <th scope="col">Year of Purchase</th>
                <th scope="col">Color</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
               require_once('partials/i_buses.php');
                ?>
        </tbody>
    </table>
</div>
<!--Footer Section-->
<?php
include 'footer.php';
?>