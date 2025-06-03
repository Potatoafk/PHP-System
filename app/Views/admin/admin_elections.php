<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <div class="header">
        <h1 class="header-title">Elections Management</h1>
        <div class="header-actions">
            <a href="add_election.html" class="btn btn-primary">+ Add New Election</a>
            <a href="export_elections.html" class="btn btn-secondary">📄 Export</a>
        </div>
    </div>

    <div class="search-section">
        <form class="search-form">
            <div class="form-group">
                <label class="form-label">Search Elections</label>
                <input type="text" name="search" class="form-input" placeholder="Search by title or ID...">
            </div>
            <div class="form-group">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <div class="elections-table">
        <div class="table-header">
            <div class="table-title">Active Elections</div>
            <div class="table-stats">Total: 2 elections</div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Election ID</th>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>E001</td>
                    <td>Presidential Election 2025</td>
                    <td>2025-05-01</td>
                    <td>2025-06-01</td>
                    <td><span class="status-badge status-active">Active</span></td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_election.html?id=E001" class="btn btn-view btn-sm">View</a>
                            <a href="edit_election.html?id=E001" class="btn btn-edit btn-sm">Edit</a>
                            <a href="delete_election.html?id=E001" class="btn btn-delete btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>E002</td>
                    <td>Local Election 2025</td>
                    <td>2025-05-01</td>
                    <td>2025-06-01</td>
                    <td><span class="status-badge status-active">Active</span></td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_election.html?id=E002" class="btn btn-view btn-sm">View</a>
                            <a href="edit_election.html?id=E002" class="btn btn-edit btn-sm">Edit</a>
                            <a href="delete_election.html?id=E002" class="btn btn-delete btn-sm">Delete</a>
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
