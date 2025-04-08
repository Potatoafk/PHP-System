<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

<div class="p-2">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="fas fa-user-tie mr-2"></i>Candidates Overview</h4>
            <div>
                <span class="badge bg-light text-dark px-3 py-2 shadow-sm">
                    <i class="fas fa-users"></i> Candidates
                </span>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" class="px-4 text-center">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Party</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($candidates as $candidate): ?>  
                            <tr class="align-middle">
                                <td class="text-center fw-bold">
                                    <div class="d-flex justify-content-center">
                                    <div class="avatar-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%;">
                                        <?= esc($candidate['ID']) ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <span class="fw-bold text-primary"><?= esc($candidate['candidate_name']) ?></span>
                                    <small class="text-muted">ID: <?= esc($candidate['ID']) ?></small>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-info text-white px-3 py-2">
                                    <?= esc($candidate['candidate_position']) ?>
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-danger text-white px-3 py-2">
                                    <?= esc($candidate['candidate_party']) ?>
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-success">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-light d-flex justify-content-between">
            <button class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-download mr-1"></i> Export
            </button>
            <a href="#" class="btn btn-sm btn-success">
                <i class="fas fa-plus-circle mr-1"></i> Add New Candidate
            </a>
        </div>
    </div>
</div>
<!-- if no candidates found in the database -->
<!-- <div class="container alert alert-info mt-4">
    <i class="bi bi-info-circle me-2"></i> No candidates found in the database.
</div> -->
<?= $this->endSection() ?>
