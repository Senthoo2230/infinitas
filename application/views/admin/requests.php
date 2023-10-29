
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card">
              <div class="card-header">
                Requests
              </div>
              <div class="card-body">
                <h5 class="card-title">Requests</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Customer id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Wallet ID</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php
                                foreach ($requests as $req) {
                                    $cus_data = $this->Customer_model->customer_data($req->customer_id);
                                    ?>
                                    <tr>
                                        <th scope="row">1</th>
                                        <th><?php echo $req->customer_id; ?></th>
                                        <th>
                                            <?php 
                                                echo $cus_data->firstname." ".$cus_data->lastname; 
                                            ?>
                                        </th>
                                        <th>
                                            <?php 
                                                echo $req->wal_id; 
                                            ?>
                                        </th>
                                        <th>
                                            <?php 
                                                echo "Rs. ".$req->amount.".00"; 
                                            ?>
                                        </th>

                                        <th>
                                            <a class="btn btn-sm btn-success" href="<?php echo base_url('requests/approve/').$req->withdrawal_id; ?>">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn-sm btn-danger" href="<?php echo base_url('requests/cancel/').$req->withdrawal_id; ?>">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </th>
                                        </tr>
                                    <?php
                                }
                            ?>
                        
                    </tbody>
                </table>
              </div>
        </div>
    </div>
</div>
      