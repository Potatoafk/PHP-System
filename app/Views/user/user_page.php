<?= $this->extend('layouts/user_base') ?>
<?= $this->section('content') ?>

<!-- Main Content -->
<div class="container py-5">
    <!-- Welcome Banner -->
    <div class="jumbotron bg-gradient-primary text-white rounded-lg shadow-lg mb-5">
        <h1 class="display-4 font-weight-bold">Welcome, <?= esc($user['first_name']) ?> <?= esc($user['last_name']) ?>!</h1>
        <p class="lead">Explore <?= count($elections) ?> active elections ready for your vote.</p>
    </div>

    <!-- Success Message -->
    <?php if (isset($message)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $message['success'] ?? '' ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <!-- Active Elections Section -->
    <h2 class="mb-4 font-weight-bold text-dark">Active Elections</h2>
    <div class="row">
        <?php foreach ($elections as $election): ?>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0 election-card">
                <div class="card-header bg-primary text-white border-bottom-0">
                    <h5 class="card-title mb-0"><?= esc($election['election_title']) ?></h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge badge-pill badge-success"><?= esc($election['election_status']) ?></span>
                    </div>
                    <p class="card-text text-muted"><?= esc($election['election_description']) ?></p>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <button class="btn btn-primary btn-block vote-btn" data-toggle="modal" data-target="#voteModal<?= $election['election_id'] ?>">
                        Vote Now
                    </button>
                    <button class="btn btn-primary btn-block vote-btn" data-toggle="modal" data-target="#resultModal<?= $election['election_id'] ?>">
                        View Results
                    </button>
                </div>
            </div>
        </div>

        <!-- Vote Modal for Election -->
        <div class="modal fade" id="voteModal<?= $election['election_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="voteModal<?= $election['election_id'] ?>Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content rounded-lg shadow-lg">
                    <div class="modal-header bg-gradient-primary text-white">
                        <h5 class="modal-title" id="voteModal<?= $election['election_id'] ?>Label"><?= esc($election['election_title']) ?></h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info d-flex align-items-center">
                            <i class="fas fa-info-circle mr-2"></i>
                            Please select your preferred candidate for each position.
                        </div>

                        <form method="post" action="<?= base_url('/user-page') ?>">
                            <input type="hidden" value="<?= $election['election_id'] ?>" name="election_id">
                            <!-- President Position -->
                            <div class="form-group">
                                <label for="president<?= $election['election_id'] ?>" class="font-weight-bold">President</label>
                                <select class="form-control custom-select" id="president<?= $election['election_id'] ?>" name="president">
                                    <option selected disabled>Select a candidate</option>
                                    <?php foreach ($president as $PRESIDENT): ?>
                                        <?php if ($PRESIDENT['election_id'] == $election['election_id']): ?>
                                            <option value="<?= esc($PRESIDENT['candidate_id']); ?>">
                                                <?= esc($PRESIDENT['candidate_first_name']); ?>
                                                <?= esc($PRESIDENT['candidate_last_name']); ?>
                                            </option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Vice-President Position -->
                            <div class="form-group">
                                <label for="vicePresident<?= $election['election_id'] ?>" class="font-weight-bold">Vice-President</label>
                                <select class="form-control custom-select" id="vicePresident<?= $election['election_id'] ?>" name="vice_president">
                                    <option selected disabled>Select a candidate</option>
                                    <?php foreach ($vice_president as $VICE_PRESIDENT): ?>
                                        <?php if ($VICE_PRESIDENT['election_id'] == $election['election_id']): ?>
                                            <option value="<?= esc($VICE_PRESIDENT['candidate_id']); ?>">
                                                <?= esc($VICE_PRESIDENT['candidate_first_name']); ?>
                                                <?= esc($VICE_PRESIDENT['candidate_last_name']); ?>
                                            </option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Secretary Position -->
                            <div class="form-group">
                                <label for="secretary<?= $election['election_id'] ?>" class="font-weight-bold">Secretary</label>
                                <select class="form-control custom-select" id="secretary<?= $election['election_id'] ?>" name="secretary">
                                    <option selected disabled>Select a candidate</option>
                                    <?php foreach ($secretary as $SECRETARY): ?>
                                        <?php if ($SECRETARY['election_id'] == $election['election_id']): ?>
                                            <option value="<?= esc($SECRETARY['candidate_id']); ?>">
                                                <?= esc($SECRETARY['candidate_first_name']); ?>
                                                <?= esc($SECRETARY['candidate_last_name']); ?>
                                            </option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Treasurer Position -->
                            <div class="form-group">
                                <label for="treasurer<?= $election['election_id'] ?>" class="font-weight-bold">Treasurer</label>
                                <select class="form-control custom-select" id="treasurer<?= $election['election_id'] ?>" name="treasurer">
                                    <option selected disabled>Select a candidate</option>
                                    <?php foreach ($treasurer as $TREASURER): ?>
                                        <?php if ($TREASURER['election_id'] == $election['election_id']): ?>
                                            <option value="<?= esc($TREASURER['candidate_id']); ?>">
                                                <?= esc($TREASURER['candidate_first_name']); ?>
                                                <?= esc($TREASURER['candidate_last_name']); ?>
                                            </option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Auditor Position -->
                            <div class="form-group">
                                <label for="auditor<?= $election['election_id'] ?>" class="font-weight-bold">Auditor</label>
                                <select class="form-control custom-select" id="auditor<?= $election['election_id'] ?>" name="auditor">
                                    <option selected disabled>Select a candidate</option>
                                    <?php foreach ($auditor as $AUDITOR): ?>
                                        <?php if ($AUDITOR['election_id'] == $election['election_id']): ?>
                                            <option value="<?= esc($AUDITOR['candidate_id']); ?>">
                                                <?= esc($AUDITOR['candidate_first_name']); ?>
                                                <?= esc($AUDITOR['candidate_last_name']); ?>
                                            </option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="alert alert-warning d-flex align-items-center">
                                <i class="fas fa-info-circle mr-2"></i>
                                Please review your selections before submitting.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit Vote</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Election Result Modal for this election -->
        <div class="modal fade" id="resultModal<?= $election['election_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel<?= $election['election_id'] ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content rounded-lg shadow-lg">
                    <div class="modal-header bg-gradient-info text-white">
                        <h5 class="modal-title text-dark" id="resultModalLabel<?= $election['election_id'] ?>">Results: <?= esc($election['election_title']) ?></h5>
                        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php if (isset($results) && isset($results[$election['election_id']]) && count($results[$election['election_id']]) > 0): ?>
                            <?php foreach ($results[$election['election_id']] as $result): ?>
                                <div class="mb-3">
                                    <h5 class="mb-1">
                                        <?= esc($result['candidate_position']) ?>:
                                        <?= esc($result['candidate_first_name']) ?> <?= esc($result['candidate_last_name']) ?>
                                    </h5>
                                    <small>Total Votes: <?= esc($result['vote_count']) ?></small>
                                </div>
                                <hr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="alert alert-info">No votes recorded for this election yet.</div>
                        <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Profile Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-lg shadow-lg">
                <div class="modal-header bg-gradient-primary text-white">
                    <h5 class="modal-title" id="profileModalLabel">Voter Profile</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <h4 class="font-weight-bold"><?= esc($user['first_name']) ?> <?= esc($user['last_name']) ?></h4>
                    </div>

                    <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab">Personal Info</a>
                        </li>
                    </ul>
                    <div class="tab-content p-4" id="profileTabsContent">
                        <!-- Personal Info Tab -->
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <form method="post" action="<?= base_url('/update-profile') ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firstName" class="font-weight-bold">First Name</label>
                                        <input type="text" class="form-control" name="first_name" id="firstName" value="<?= esc($user['first_name']) ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName" class="font-weight-bold">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" id="lastName" value="<?= esc($user['last_name']) ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="font-weight-bold">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?= esc($user['email']) ?>">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="font-weight-bold">Phone Number</label>
                                    <input type="tel" class="form-control" name="phone_no" id="phone" value="<?= esc($user['phone_no']) ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
