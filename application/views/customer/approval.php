
    <?php
        $customer_data = $this->Customer_model->customer_data($customer_id);
    ?>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="card">
                <div class="card-header">
                    Profile
                </div>
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <table class="table">
                    <tbody>
                        <tr>
                        <td>Firstname :</td>
                        <td><?php echo $customer_data->firstname; ?></td>
                        </tr>
                        <tr>
                        <td>Lastname :</td>
                        <td><?php echo $customer_data->lastname; ?></td>
                        </tr>
                        <tr>
                        <td>Email :</td>
                        <td><?php echo $customer_data->email; ?></td>
                        </tr>
                        <tr>
                        <td>Mobile No :</td>
                        <td><?php echo $customer_data->mobile; ?></td>
                        </tr>
                        <tr>
                        <td>Address :</td>
                        <td><?php echo $customer_data->address; ?></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-3">
                <div class="card">
                    <div class="card-header">
                        Approval
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo base_url('approval/submit'); ?>">
                        <input type="text" name="customer_id" value="<?php echo $customer_id; ?>" hidden>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputUsername">Package</label>
                                    <select name="package" class="form-control">
                                        <option value="">Select Package</option>
                                        <?php
                                            foreach ($packages as $pac) {
                                                ?>
                                                    <option value="<?php echo $pac->package_id; ?>"><?php echo $pac->package; ?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                    <span style="font-size: 12px;" class="text-danger"><?php echo form_error('package'); ?></span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputUsername">Interest Rate (%)</label>
                                    <input type="text" name="interest" class="form-control">
                                    <span style="font-size: 12px;" class="text-danger"><?php echo form_error('interest'); ?></span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputUsername">Start Date</label>
                                    <input type="date" name="start_date" class="form-control">
                                    <span style="font-size: 12px;" class="text-danger"><?php echo form_error('start_date'); ?></span>
                                </div>
                            </div>

                            <div class="col-md-3" style="margin-top:30px;">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary w-100">
                                </div>
                            </div>


                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>