<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Registered Voters</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Vote Cast</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main row -->
            <div class="row">
                <!-- Left column -->
                <section class="col-lg-6 connectedSortable">
                    <!-- Updates card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Updates
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Position</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Vote Count</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>President</td>
                                            <td>John Smith</td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <td>Vice President</td>
                                            <td>Mary Johnson</td>
                                            <td>120</td>
                                        </tr>
                                        <tr>
                                            <td>Secretary</td>
                                            <td>Robert Brown</td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>Auditor</td>
                                            <td>James Reid</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td>Treasurer</td>
                                            <td>John Ivan</td>
                                            <td>34</td>
                                        </tr>
                                        <tr>
                                            <td>PIO</td>
                                            <td>Mike Tyson</td>
                                            <td>35</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Right column -->
                <section class="col-lg-6 connectedSortable">
                    <!-- Recent Voter Registered card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="fas fa-th mr-1"></i>
                                Recent Voter Registered
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Voter ID</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle font-weight-bold">001</td>
                                            <td class="align-middle">John </td>
                                            <td class="align-middle">Doe</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle font-weight-bold">002</td>
                                            <td class="align-middle">Jane</td>
                                            <td class="align-middle">Smith</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle font-weight-bold">003</td>
                                            <td class="align-middle">Mike</td>
                                            <td class="align-middle">Johnson</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle font-weight-bold">003</td>
                                            <td class="align-middle">Mike</td>
                                            <td class="align-middle">Johnson</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle font-weight-bold">003</td>
                                            <td class="align-middle">Mike</td>
                                            <td class="align-middle">Johnson</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle font-weight-bold">003</td>
                                            <td class="align-middle">Mike</td>
                                            <td class="align-middle">Johnson</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

<?= $this->endsection() ?>
