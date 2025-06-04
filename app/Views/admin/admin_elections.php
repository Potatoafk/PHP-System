<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <div class="header">
        <h1 class="header-title">Elections Management</h1>
        <div class="header-actions">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addElectionModal">
                + Add New Election
            </button>
        </div>
    </div>

    <!-- Add Election Modal -->
    <div class="modal fade" id="addElectionModal" tabindex="-1" aria-labelledby="addElectionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addElectionModalLabel">Add New Election</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="elections/add">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="election_title" class="form-label">Election Title</label>
                            <input type="text" class="form-control" id="election_title" name="election_title" required>
                        </div>
                        <div class="mb-3">
                            <label for="election_description" class="form-label">Election Description</label>
                            <input type="text" class="form-control" id="election_description" name="election_description" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Election</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="elections-table">
        <div class="table-header">
            <div class="table-title">Active Elections</div>
            <div class="table-stats">Total: <?= count($elections) ?> elections</div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date Created</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($elections as $election): ?>
                <tr>
                    <td><?= esc($election['election_title']) ?></td>
                    <td><?= esc($election['election_created']) ?></td>
                    <td><span class="status-badge status-<?= strtolower(esc($election['election_status'])) ?>"><?= esc($election['election_status']) ?></span></td>
                    <td>
                        <div class="action-buttons">
                            <button type="button" class="btn btn-view btn-sm" data-bs-toggle="modal" data-bs-target="#viewElectionModal<?= esc($election['election_id']) ?>">View</button>
                            <button type="button" class="btn btn-edit btn-sm" data-bs-toggle="modal" data-bs-target="#editElectionModal<?= esc($election['election_id']) ?>">Edit</button>
                            <a href="elections/delete/<?= esc($election['election_id']) ?>" class="btn btn-delete btn-sm">Delete</a>
                        </div>

                        <!-- View Election Modal -->
                        <div class="modal fade" id="viewElectionModal<?= esc($election['election_id']) ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">View Election</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Title:</strong> <?= esc($election['election_title']) ?></p>
                                        <p><strong>Description:</strong> <?= esc($election['election_description']) ?></p>
                                        <p><strong>Created:</strong> <?= esc($election['election_created']) ?></p>
                                        <p><strong>Status:</strong> <?= esc($election['election_status']) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Election Modal -->
                        <div class="modal fade" id="editElectionModal<?= esc($election['election_id']) ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Election</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="elections/update/<?= esc($election['election_id']) ?>">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="election_title" class="form-label">Election Title</label>
                                                <input type="text" class="form-control" name="election_title" value="<?= esc($election['election_title']) ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="election_description" class="form-label">Election Description</label>
                                                <input type="text" class="form-control" name="election_description" value="<?= esc($election['election_description']) ?>" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


<?= $this->endsection() ?>
