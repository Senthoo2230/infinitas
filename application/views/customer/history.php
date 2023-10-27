
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
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $customer_package->start_date; ?></td>
                            <td>Deposit</td>
                            <td><?php echo "Rs.".$package_data->amount; ?></td>
                            <td>Approved</td>
                        </tr>
                        
                    </tbody>
                </table>
              </div>
        </div>
    </div>
</div>
      