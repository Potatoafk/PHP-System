<?= $this->extend('layouts/admin_base') ?>
<?= $this->section('content') ?>

    <div class="header">
        <h1 class="header-title">Election Results</h1>
        <div class="header-actions">
            <a href="export_results.html" class="btn btn-secondary">📄 Export</a>
        </div>
    </div>

    <div class="search-section">
        <form class="search-form">
            <div class="form-group">
                <label class="form-label">Search Results</label>
                <input type="text" name="search" class="form-input" placeholder="Search by candidate or position...">
            </div>
            <div class="form-group">
                <label class="form-label">Election</label>
                <select name="election" class="form-select">
                    <option value="">All Elections</option>
                    <option value="presidential">Presidential Election 2025</option>
                    <option value="local">Local Election 2025</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <div class="results-table">
        <div class="table-header">
            <div class="table-title">Election Results</div>
            <div class="table-stats">Total Votes: 44</div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Candidate Name</th>
                    <th>Vote Count</th>
                    <th>Election</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>President</td>
                    <td>John Smith</td>
                    <td>150</td>
                    <td>Presidential Election 2025</td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_result.html?id=001" class="btn btn-view btn-sm">View</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Vice President</td>
                    <td>Mary Johnson</td>
                    <td>120</td>
                    <td>Presidential Election 2025</td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_result.html?id=002" class="btn btn-view btn-sm">View</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Secretary</td>
                    <td>Robert Brown</td>
                    <td>90</td>
                    <td>Presidential Election 2025</td>
                    <td>
                        <div class="action-buttons">
                            <a href="view_result.html?id=003" class="btn btn-view btn-sm">View</a>
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
