<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <div class="header">
        <h1 class="header-title">Voters Management</h1>
    </div>

    <div class="voters-table">
        <div class="table-header">
            <div class="table-title">Registered Voters</div>
            <div class="table-stats">Total: <?= count($voters) ?> voters</div>
        </div>

        <!-- Table Structure -->
        <table>
            <thead>
                <tr>
                    <th>Voter ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($voters as $voter): ?>
                <tr>
                    <td><?= $voter['user_id'] ?></td>
                    <td><?= $voter['first_name'] . ' ' . $voter['last_name'] ?></td>
                    <td><?= $voter['email'] ?></td>
                    <td><?= date('Y-m-d', strtotime($voter['date_of_birth'])) ?></td>
                    <td>
                        <div class="action-buttons">
                            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal<?= $voter['user_id'] ?>">
                                View
                            </button>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $voter['user_id'] ?>">
                                Edit
                            </button>
                            <a href="/voters/delete/<?= $voter['user_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </div>

                        <!-- View Modal -->
                        <div class="modal fade" id="viewModal<?= $voter['user_id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Voter Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Voter ID:</strong> <?= $voter['user_id'] ?></p>
                                        <p><strong>Name:</strong> <?= $voter['first_name'] . ' ' . $voter['last_name'] ?></p>
                                        <p><strong>Email:</strong> <?= $voter['email'] ?></p>
                                        <p><strong>Registration Date:</strong> <?= date('Y-m-d', strtotime($voter['date_of_birth'])) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal<?= $voter['user_id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Voter</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= base_url('voters/update/' . $voter['user_id']) ?>">
                                            <input type="hidden" name="user_id" value="<?= $voter['user_id'] ?>">
                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="first_name" value="<?= $voter['first_name'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" value="<?= $voter['last_name'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" value="<?= $voter['email'] ?>">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
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
