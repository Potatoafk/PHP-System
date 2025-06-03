<?= $this->extend('layouts/user_base') ?>
<?= $this->section('content') ?>

    <!-- Main Content -->
    <div class="container py-4">
        <!-- Welcome Banner -->
        <div class="jumbotron mb-4">
            <h1 class="display-4">Welcome, <?= esc($user['first_name']) ?></h1>
            <p class="lead">You have 2 active elections available to vote.</p>
        </div>

        <!-- Active Elections Section -->
        <h2 class="mb-4">Active Elections</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Election 1</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge badge-success">Open for Voting</span>
                        </div>
                        <p class="card-text">Select representatives for your city council. Choose up to 3 candidates
                            from your district.</p>
                    </div>
                    <div class="card-footer bg-white">
                        <!-- Modified to toggle modal -->
                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#voteModal1">Vote
                            Now</button>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Election 2</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge badge-success">Open for Voting</span>
                        </div>
                        <p class="card-text">Select representatives for your city council. Choose up to 3 candidates
                            from your district.</p>
                    </div>
                    <div class="card-footer bg-white">
                        Modified to toggle modal
                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#voteModal2">Vote
                            Now</button>
                    </div>
                </div>
            </div> -->
        </div>


        <!-- Recent Voting History -->
        <!-- <h2 class="mb-4 mt-4">Your Voting History</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Election</th>
                        <th>Date Voted</th>
                        <th>Status</th>
                        <th>Results</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mayor Election</td>
                        <td>April 10, 2025</td>
                        <td><span class="badge badge-success">Completed</span></td>
                        <td><a href="#" class="btn btn-sm btn-info">View Results</a></td>
                    </tr>
                    <tr>
                        <td>County Tax Referendum</td>
                        <td>March 25, 2025</td>
                        <td><span class="badge badge-success">Completed</span></td>
                        <td><a href="#" class="btn btn-sm btn-info">View Results</a></td>
                    </tr>
                    <tr>
                        <td>State Representative</td>
                        <td>February 15, 2025</td>
                        <td><span class="badge badge-success">Completed</span></td>
                        <td><a href="#" class="btn btn-sm btn-info">View Results</a></td>
                    </tr>
                </tbody>
            </table>
        </div> -->
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

    <!-- Vote Modal for Election 1 -->
    <div class="modal fade" id="voteModal1" tabindex="-1" role="dialog" aria-labelledby="voteModal1Label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="voteModal1Label">Vote: Election 1</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle mr-2"></i> Please select your preferred candidate for each
                        position.
                    </div>

                    <form>
                        <!-- President Position -->
                        <div class="form-group">
                            <label for="mayor"><strong>President</strong></label>
                            <select class="form-control" id="mayor">
                                <option selected disabled>Select a candidate</option>
                                <option>John Smith</option>
                                <option>Jane Doe</option>
                                <option>Robert Johnson</option>
                                <option>Maria Garcia</option>
                            </select>
                        </div>

                        <!-- Vice-President Position -->
                        <div class="form-group">
                            <label for="cityCouncil"><strong>Vice-President</strong></label>
                            <select class="form-control" id="cityCouncil">
                                <option selected disabled>Select a candidate</option>
                                <option>Michael Brown</option>
                                <option>Sarah Wilson</option>
                                <option>David Lee</option>
                                <option>Jennifer Martinez</option>
                            </select>
                        </div>

                        <!-- Secretary Position -->
                        <div class="form-group">
                            <label for="treasurer"><strong>Secretary</strong></label>
                            <select class="form-control" id="treasurer">
                                <option selected disabled>Select a candidate</option>
                                <option>Thomas Anderson</option>
                                <option>Emily Taylor</option>
                                <option>James Williams</option>
                                <option>Patricia Moore</option>
                            </select>
                        </div>

                        <!-- Treasurer Position -->
                        <div class="form-group">
                            <label for="schoolBoard"><strong>Treasurer</strong></label>
                            <select class="form-control" id="schoolBoard">
                                <option selected disabled>Select a candidate</option>
                                <option>Richard Davis</option>
                                <option>Elizabeth Miller</option>
                                <option>Charles Wilson</option>
                                <option>Susan Martin</option>
                            </select>
                        </div>

                        <!-- Auditor Position -->
                        <div class="form-group">
                            <label for="schoolBoard"><strong>Auditor</strong></label>
                            <select class="form-control" id="schoolBoard">
                                <option selected disabled>Select a candidate</option>
                                <option>Richard Davis</option>
                                <option>Elizabeth Miller</option>
                                <option>Charles Wilson</option>
                                <option>Susan Martin</option>
                            </select>
                        </div>

                        <div class="alert alert-warning">
                            <i class="fas fa-info-circle mr-2"></i> Pleace Check your selections before submitting.
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit Vote</button>
                </div>
            </div>
        </div>
    </div>
<?= $this->endsection() ?>
