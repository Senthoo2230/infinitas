
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card">
              <div class="card-header">
                Report
              </div>
              <div class="card-body">
                <h5 class="card-title">Report</h5>
                <?php
                    $months = $package_data->duration;
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $start_date = $customer_package->start_date;
                                $date = new DateTime($start_date);
                                function getCutoffDate($date) {
                                    $days = cal_days_in_month(CAL_GREGORIAN, $date->format('n'), $date->format('Y'));
                                    $date->add(new DateInterval('P' . $days .'D'));
                                    return $date;
                                }
                                for ($i=1; $i <= $months; $i++) { 
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td>
                                                <?php
                                                    $date = getCutoffDate($date);
                                                    echo $date->format('d-m-Y') . '<br>';
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $rate = $customer_package->rate;
                                                    echo $rate."%";
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $invest = $package_data->amount;
                                                    $amount = $invest*$rate/100;
                                                    echo "Rs.".$amount.".00";
                                                ?>
                                            </td>
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
      