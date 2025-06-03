<?php

namespace App\Controllers;
use App\Controllers\BaseController;


class AdminController extends BaseController
{

    // Dashboard method to load the admin dashboard view
    public function management()
    {
        return view('admin/admin_management', [
            'title' => 'Admin Management'
        ]); // Load the admin management view
    }


    // Voters method to load the voters list view
    public function voters()
    {
        return view('admin/admin_voters', [
            'title' => 'Voters List'
        ]); // Load the voters list view
    }


    // Results method to load the election results view
    public function results()
    {
        return view('admin/admin_results', [
            'title' => 'Election Results'
        ]); // Load the election results view
    }


    // Elections method to load the elections management view
    public function elections()
    {
        return view('admin/admin_elections', [
            'title' => 'Elections Management'
        ]); // Load the elections management view
    }

    // Candidates method to load the candidates management view
    public function candidates()
    {
        return view('admin/admin_candidates', [
            'title' => 'Candidates Management'
        ]); // Load the candidates management view
    }

}
