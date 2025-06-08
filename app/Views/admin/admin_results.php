<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <div class="header">
        <h1 class="header-title">Election Results</h1>
    </div>


    <div class="results-table">
        <div class="table-header">
            <div class="table-title">Election Results</div>
            <div class="table-stats">Total Elections: <?= esc(count($elections)) ?></div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Election Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($elections as $election): ?>
                <tr>
                    <td><?= esc($election['election_title']) ?></td>
                    <td>
                        <div class="action-buttons">
                            <button type="button" class="btn btn-view btn-sm" data-bs-toggle="modal" data-bs-target="#resultModal<?= $election['election_id'] ?>">
                                View Results
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="resultModal<?= $election['election_id'] ?>" tabindex="-1" aria-labelledby="resultModalLabel<?= $election['election_id'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="resultModalLabel<?= $election['election_id'] ?>"><?= esc($election['election_title']) ?> Results</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="results-list">
                                            <?php if (!empty($results[$election['election_id']])): ?>
                                                <?php foreach ($results[$election['election_id']] as $result): ?>
                                                    <div class="candidate-result">
                                                        <h5 class="text-dark fw-bold">
                                                            <?= esc($result['candidate_position']) ?>:
                                                            <?= esc($result['candidate_first_name']) ?> <?= esc($result['candidate_last_name']) ?>
                                                        </h5>
                                                        <small>Total Votes: <?= esc($result['vote_count']) ?></small>
                                                    </div>
                                                    <hr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <div>No votes recorded for this election yet.</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?= $this->endsection() ?>
