<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <div class="header">
        <h1 class="header-title">Candidates Management</h1>
        <div class="header-actions">
            <a href="add_candidate.html" class="btn btn-primary">+ Add New Candidate</a>
            <a href="export_candidates.html" class="btn btn-secondary">📄 Export</a>
        </div>
    </div>

    <div class="search-section">
        <form class="search-form">
            <div class="form-group">
                <label class="form-label">Search Candidates</label>
                <input type="text" name="search" class="form-input" placeholder="Search by name or ID...">
            </div>
            <div class="form-group">
                <label class="form-label">Position</label>
                <select name="position" class="form-select">
                    <option value="">All Positions</option>
                    <option value="president">President</option>
                    <option value="vice_president">Vice President</option>
                    <option value="secretary">Secretary</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <div class="candidates-table">
        <div class="table-header">
            <div class="table-title">Candidates List</div>
            <div class="table-stats">Total: 3 candidates</div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Candidate ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Election</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>C001</td>
                    <td>John Smith</td>
                    <td>President</td>
                    <td>Presidential Election 2025</td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_candidate.html?id=C001" class="btn btn-view btn-sm">View</a>
                            <a href="edit_candidate.html?id=C001" class="btn btn-edit btn-sm">Edit</a>
                            <a href="delete_candidate.html?id=C001" class="btn btn-delete btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>C002</td>
                    <td>Mary Johnson</td>
                    <td>Vice President</td>
                    <td>Presidential Election 2025</td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_candidate.html?id=C002" class="btn btn-view btn-sm">View</a>
                            <a href="edit_candidate.html?id=C002" class="btn btn-edit btn-sm">Edit</a>
                            <a href="delete_candidate.html?id=C002" class="btn btn-delete btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>C003</td>
                    <td>Robert Brown</td>
                    <td>Secretary</td>
                    <td>Presidential Election 2025</td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_candidate.html?id=C003" class="btn btn-view btn-sm">View</a>
                            <a href="edit_candidate.html?id=C003" class="btn btn-edit btn-sm">Edit</a>
                            <a href="delete_candidate.html?id=C003" class="btn btn-delete btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="pagination">
            <button>← Previous</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>Next →</button>
        </div>
    </div>

    <div class="footer">
        Copyright © 2025 <a href="#" style="color: #3498db;">Voting System Sheesh</a>. All rights reserved.
    </div>

<?= $this->endsection() ?>
