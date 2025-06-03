<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <div class="header">
        <h1 class="header-title">Voters Management</h1>
        <div class="header-actions">
            <a href="add_voter.html" class="btn btn-primary">+ Add New Voter</a>
        </div>
    </div>

    <div class="search-section">
        <form class="search-form">
            <div class="form-group">
                <label class="form-label">Search Voters</label>
                <input type="text" name="search" class="form-input" placeholder="Search by name, email, or ID...">
            </div>
            <div class="form-group">
                <label class="form-label">District</label>
                <select name="district" class="form-select">
                    <option value="">All Districts</option>
                    <option value="district1">District 1 - Downtown</option>
                    <option value="district2">District 2 - North Side</option>
                    <option value="district3">District 3 - East End</option>
                    <option value="district4">District 4 - West Side</option>
                    <option value="district5">District 5 - South Hills</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <div class="voters-table">
        <div class="table-header">
            <div class="table-title">Registered Voters</div>
            <div class="table-stats">Total: 150 voters</div>
        </div>

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
                <tr>
                    <td>001</td>
                    <td>John Doe</td>
                    <td>john.doe@email.com</td>
                    <td>2025-05-15</td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_voter.html?id=001" class="btn btn-view btn-sm">View</a>
                            <a href="edit_voter.html?id=001" class="btn btn-edit btn-sm">Edit</a>
                            <a href="delete_voter.html?id=001" class="btn btn-delete btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Jane Smith</td>
                    <td>jane.smith@email.com</td>
                    <td>2025-05-14</td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_voter.html?id=002" class="btn btn-view btn-sm">View</a>
                            <a href="edit_voter.html?id=002" class="btn btn-edit btn-sm">Edit</a>
                            <a href="delete_voter.html?id=002" class="btn btn-delete btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Mike Johnson</td>
                    <td>mike.johnson@email.com</td>
                    <td>2025-05-13</td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_voter.html?id=003" class="btn btn-view btn-sm">View</a>
                            <a href="edit_voter.html?id=003" class="btn btn-edit btn-sm">Edit</a>
                            <a href="delete_voter.html?id=003" class="btn btn-delete btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>John Ivan</td>
                    <td>John.Ivan@email.com</td>
                    <td>2003-11-20</td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_voter.html?id=003" class="btn btn-view btn-sm">View</a>
                            <a href="edit_voter.html?id=003" class="btn btn-edit btn-sm">Edit</a>
                            <a href="delete_voter.html?id=003" class="btn btn-delete btn-sm">Delete</a>
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

<?= $this->endsection() ?>
