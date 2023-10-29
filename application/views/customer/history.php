
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card">
              <div class="card-header">
                History
              </div>
              <div class="card-body">
                <h5 class="card-title">History</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Transaction</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach ($cus_history as $his) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $his->history_date; ?></td>
                                        <td>
                                            <?php 
                                                $type = $his->transaction;
                                                if ($type == 0) {
                                                    echo "Deposit";
                                                }
                                                if ($type == 1) {
                                                    echo "Withdrawal Req";
                                                }
                                                if ($type == 2) {
                                                    echo "Withdrawal";
                                                }
                                                if ($type == 3) {
                                                    echo "Ref Bonus";
                                                }
                                            ?>
                                        </td>
                                        <td><?php echo "Rs.".$his->amount; ?></td>
                                        <td>Approved</td>
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
      