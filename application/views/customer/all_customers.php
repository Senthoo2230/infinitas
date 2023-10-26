
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Refferal ID</th>
                <th>Package</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i=1;
                foreach ($customers as $cus) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $i; ?></td>
                            <td><?php echo $cus->firstname." ".$cus->lastname; ?></td>
                            <td><?php echo $cus->mobile; ?></td>
                            <td><?php echo $cus->ref_id; ?></td>
                            <td><?php echo "Package"; ?></td>
                            <td>
                                <?php 
                                    if ($cus->approved == 0) {
                                        echo "Not Approve";
                                    }
                                    if ($cus->approved == 1) {
                                        echo "Approved";
                                    }
                                ?>
                            </td>
                            <td class="text-center">
                                <?php
                                    if ($cus->approved == 0) {
                                        ?>
                                            <a class="btn btn-sm btn-success" href="<?php echo base_url('customer/approval/').$cus->customer_id; ?>">Approve</a>
                                        <?php
                                    }
                                    if ($cus->approved == 1) {
                                        ?>
                                            <a class="btn btn-sm btn-success disabled" href="<?php echo base_url('customer/approval/').$cus->customer_id; ?>">Approve</a>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php
                    $i++;
                }
            ?>
            
        </tbody>
    </table>
        </div>
      </div>
      <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
      </script>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2023 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>