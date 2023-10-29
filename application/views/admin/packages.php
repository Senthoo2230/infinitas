
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card">
              <div class="card-header">
                Packages
              </div>
              <div class="card-body">
                <h5 class="card-title">Packages</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Package</th>
                            <th class="text-end" scope="col">Amount</th>
                            <th class="text-end" scope="col">Refferal Bonus</th>
                            <th class="text-center" scope="col">Duration</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php
                                $i = 1;
                                foreach ($packages as $pac) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <th><?php echo $pac->package; ?></th>
                                        <th class="text-end"><?php echo "Rs.".$pac->amount.".00"; ?></th>
                                        <th class="text-end"><?php echo "Rs.".$pac->ref_bonus.".00"; ?></th>
                                        <th class="text-center"><?php echo $pac->duration." Months"; ?></th>

                                        <th class="text-center">
                                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('package/edit/').$pac->package_id; ?>">
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
      