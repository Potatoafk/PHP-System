<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $admin_id = session()->get('admin_id');
        // log_message('debug', 'Admin ID from session: ' . $admin_id);

        if (!isset($admin_id)) {
            return redirect()->to(base_url('/admin'))->with('error', 'You must be logged in as an admin to access this page.');
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
