
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card">
              <div class="card-header">
                Customers
              </div>
              <div class="card-body">
                <h5 class="card-title">Customers</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th class="text-center" scope="col">Customer ID</th>
                            <th class="text-center" scope="col">Mobile</th>
                            <th class="text-center" scope="col">Package</th>
                            <th class="text-center" scope="col">Rate</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php
                                $i = 1;
                                foreach ($customers as $cus) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <th class="text-center"><?php echo $customer_id = $cus->customer_id; ?></th>
                                        <th class="text-center"><?php echo $cus->mobile; ?></th>
                                        <th class="text-center">
                                            <?php 
                                                $package_id = $this->Customer_model->customer_package($customer_id)->package_id;
                                                echo $this->Customer_model->package_data($package_id)->package;
                                            ?>
                                        </th>
                                        <th class="text-center">
                                            <?php 
                                                echo $this->Customer_model->customer_package($customer_id)->rate."%";
                                                
                                            ?>
                                        </th>
                                        <th class="text-center">
                                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('customer/edit/').$cus->customer_id; ?>">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                        </th>
                                        </tr>
                                    <?php
                                    $i++;
                                }
                            ?>
                        
                    </tbody>
                </table>
              </div>
        </div>
    </div>
</div>
      