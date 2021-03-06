<?php
require APPROOT . '/views/includes/customer_header.php';

?>
<div class="content">
    <div class="container-fluid">
    <center>
            <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#exampleModal">
                Create transaction
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create transaction</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form" method="post" action="/employee/customers/create">

                                <div class="card-body">

                                    
                                   
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">perm_identity</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Customer Name..." name="name" required>
                                        </div>
                                    </div>
                                     <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">phone</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Phone number..." name="phone_number" required>
                                        </div>
                                    </div>
                                  

                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">grade</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Date of Birth 31/12/XXXX..." name="dob" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">room</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Address..." name="address" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">room</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="1-Individual/2-Organization" name="type" required>
                                        </div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">pets</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Nic for individual..." name="nic">
                                        </div>
                                    </div>
                                    
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-info" name="create" value="create"></input>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </center>
<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Customer </h4>
                        <p class="card-category"> Info </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead class=" text-info">
                                    <th>Name</th>    
                                    <th>Id</th>
                                    <th>Phone Number</th>
                                   
                                    <th>Edit</th>
                                    
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    <tr>
                                      <?php foreach($data['customers'] as $customer): ?>
                                             <td id="username"><?php echo "to be added"; ?></td>
                                            <td><?php echo "to be added"; ?></td>
                                        
                                           
                                         
                                            <td><?php echo "to be added"; ?></td>
                                           
                                            <td><a href="/employee/customers/update/<?php echo "to be added"; ?>"><button class="btn btn-info">Edit</button></a>
                                            </td>

                                           
                                            <td><a href="/employee/customers/delete/<?php echo "to be added" ?>"><button class="btn btn-danger">Delete</button></a>
                                            </td>
                                    </tr>
                                        <?php endforeach; ?>


                                   


                                   

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            require APPROOT . '/views/includes/customer_footer.php';
            ?>