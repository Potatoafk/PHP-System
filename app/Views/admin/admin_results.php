<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <div class="header">
        <h1 class="header-title">Election Results</h1>
    </div>


    <div class="results-table">
        <div class="table-header">
            <div class="table-title">Election Results</div>
            <div class="table-stats">Total Votes: 44</div>
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
                                            <div class="president">
                                                <h5>President: John Smith</h5>
                                                <small>Total Votes: 156 (45%)</small>
                                            </div>
                                            <hr>
                                            <div class="vice-president">
                                                <h5>Vice President: Jane Doe</h5>
                                                <small>Total Votes: 156 (45%)</small>
                                            <hr>
                                            <div class="secretary">
                                                <h5>Secretary: Jane Doe</h5>
                                                <small>Total Votes: 156 (45%)</small>
                                            <hr>
                                            <div class="treasurer">
                                                <h5>Treasurer: Jane Doe</h5>
                                                <small>Total Votes: 156 (45%)</small>
                                            <hr>
                                            <div class="auditor">
                                                <h5>Auditor: Jane Doe</h5>
                                                <small>Total Votes: 156 (45%)</small>
                                            <hr>
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
