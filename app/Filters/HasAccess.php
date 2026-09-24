<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class HasAccess implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Redirect already-authenticated users away from guest-only pages
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
