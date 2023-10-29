
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Withdrawal
                </div>
                <div class="card-body">
                    <h5 class="card-title">Withdrawal Request</h5>
                    <div class="text-success">
                        Total Balance : Rs.1000.00
                    </div>
                    <div class="mt-2">
                        <form method="post" action="<?php echo base_url('withdrawal/request'); ?>">

                            <div class="form-group">
                                <label for="exampleInputUsername">Amount</label>
                                <input type="number" name="amount" class="form-control" value="0">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputUsername">Wallet ID</label>
                                <input type="text" name="wal_id" class="form-control">
                            </div>

                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-primary w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
      