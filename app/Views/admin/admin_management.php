<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= count($voters) ?></h3>
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
                            <h3>1</h3>
                            <p>No. of Election</p>
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
                                Latest Election Updates ( <?= $elections['election_title'] ?> )
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
                                        <?php foreach($results as $result): ?>
                                        <tr>
                                            <td class="align-middle font-weight-bold"><?= $result['candidate_position'] ?></td>
                                            <td class="align-middle"><?= $result['candidate_first_name'] . ' ' . $result['candidate_last_name'] ?></td>
                                            <td class="align-middle">
                                                <span class="badge badge-info"><?= $result['vote_count'] ?></span>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
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
                                        <?php foreach($voters as $voter): ?>
                                        <tr>
                                            <td class="align-middle font-weight-bold"><?= $voter['user_id'] ?></td>
                                            <td class="align-middle"><?= $voter['first_name'] ?></td>
                                            <td class="align-middle"><?= $voter['last_name'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
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
