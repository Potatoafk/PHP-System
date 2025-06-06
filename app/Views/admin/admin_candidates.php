<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <div class="header">
        <h1 class="header-title">Candidates Management</h1>
        <div class="header-actions">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCandidateModal">
                + Add New Candidate
            </button>
        </div>
    </div>

    <!-- Add Candidate Modal -->
    <div class="modal fade" id="addCandidateModal" tabindex="-1" aria-labelledby="addCandidateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= base_url('candidates/add') ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCandidateModalLabel">Add New Candidate</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="candidate_first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="candidate_last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" name="candidate_position" required>
                        </div>
                        <div class="mb-3">
                            <label for="election" class="form-label">Election</label>
                            <select class="form-select" id="election" name="election_id" required>
                                <option value="">Select Election</option>
                                <?php foreach($elections as $election): ?>
                                    <option value="<?= $election['election_id'] ?>"><?= esc($election['election_title']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Candidate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="candidates-table">
        <div class="table-header">
            <div class="table-title">Candidates List</div>
            <div class="table-stats">Total: <?= count($candidates) ?> candidates</div>
        </div>



        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Election</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php if(empty($candidates)): ?>
                <tr>
                <td colspan="5" class="text-center">No candidates found</td>
                </tr>
            <?php else: ?>
                <?php foreach($candidates as $candidate): ?>
                <tr>
                    <td><?= esc($candidate['candidate_first_name']) ?> <?=esc($candidate['candidate_last_name']) ?> </td>
                    <td><?= esc($candidate['candidate_position']) ?></td>
                    <td><?= esc($candidate['election_title']) ?></td>
                    <td>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editCandidateModal">Edit</button>
                    <a href="/candidate/delete/<?= $candidate['candidate_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>

                <!-- Edit Candidate Modal -->
                 <div class="modal fade" id="editCandidateModal" tabindex="-1" aria-labelledby="editCandidateModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" action="<?= base_url('candidates/update/' . $candidate['candidate_id']) ?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCandidateModalLabel">Edit Candidate</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="candidate_id" id="edit_candidate_id">
                                    <div class="mb-3">
                                        <label for="edit_firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="edit_firstName" name="candidate_first_name" value="<?=esc($candidate['candidate_first_name']) ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit_lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="edit_lastName" name="candidate_last_name" value="<?=esc($candidate['candidate_last_name']) ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit_position" class="form-label">Position</label>
                                        <input type="text" class="form-control" id="edit_position" name="candidate_position" value="<?=esc($candidate['candidate_position']) ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit_election" class="form-label">Election</label>
                                        <?php $current_election_id = $election['election_id']; ?>
                                        <select class="form-select" id="edit_election" name="election_id" required>
                                            <option value="">Select Election</option>
                                            <?php foreach($elections as $election): ?>
                                            <option value="<?= $election['election_id'] ?>" <?= ($current_election_id === $election['election_id'])? 'selected': '' ?>><?= esc($election['election_title']) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update Candidate</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

<?= $this->endsection() ?>
