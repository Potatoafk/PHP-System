<?= $this->extend('layouts/user_base') ?>
<?= $this->section('content') ?>

    <!-- Main Content -->
    <div class="container py-4">
        <!-- Welcome Banner -->
        <div class="jumbotron mb-4">
            <h1 class="display-4">Welcome, <?= esc($user['first_name']) ?></h1>
            <p class="lead">You have <?= count($elections) ?> active elections available to vote.</p>
        </div>

        <!-- Active Elections Section -->

        <h2 class="mb-4">Active Elections</h2>
        <div class="row">
            <?php foreach ($elections as $election): ?>
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0"><?= esc($election['election_title']) ?></h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge badge-success"><?= esc($election['election_status']) ?></span>
                        </div>
                        <p class="card-text"><?= esc($election['election_description']) ?></p>
                    </div>
                    <div class="card-footer bg-white">
                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#voteModal<?= $election['election_id'] ?>">
                            Vote Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Vote Modal for Election-->
            <div class="modal fade" id="voteModal<?= $election['election_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="voteModal1Label"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="voteModal1Label"><?= esc($election['election_title']) ?></h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle mr-2"></i> Please select your preferred candidate for each
                                position.
                            </div>

                            <form method="post" action="<?= base_url('/user-page') ?>">
                                <!-- President Position -->
                                <div class="form-group">
                                    <label for="mayor"><strong>President</strong></label>
                                    <select class="form-control" id="mayor">
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
                                    <label for="cityCouncil"><strong>Vice-President</strong></label>
                                    <select class="form-control" id="cityCouncil">
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
                                    <label for="treasurer"><strong>Secretary</strong></label>
                                    <select class="form-control" id="treasurer">
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
                                    <label for="schoolBoard"><strong>Treasurer</strong></label>
                                    <select class="form-control" id="schoolBoard">
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
                                    <label for="schoolBoard"><strong>Auditor</strong></label>
                                    <select class="form-control" id="schoolBoard">
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

                                <div class="alert alert-warning">
                                    <i class="fas fa-info-circle mr-2"></i> Pleace Check your selections before submitting.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit Vote</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- Profile Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="profileModalLabel">Voter Profile</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/100" class="rounded-circle mb-3" alt="Profile Picture">
                        <h4>John Doe</h4>
                    </div>

                    <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab">Personal
                                Info</a>
                        </li>
                    </ul>
                    <div class="tab-content p-3" id="profileTabsContent">
                        <!-- Personal Info Tab -->
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName" value="John" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" value="Doe" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" value="john.doe@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" value="(555) 123-4567">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" value="123 Main Street">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

<?= $this->endsection() ?>
