<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class AdminAuth extends BaseController
{
    public function login()
    {
        helper(['form']);
        if (session()->get('isAdmin')) {
            return redirect()->to(site_url('admin/etlap'));
        }
        return view('admin/login');
    }

    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $users = new UsersModel();
        $user = $users->where('user_name', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('isAdmin', true);
            session()->set('adminName', $user['name'] ?? $user['user_name']);
            return redirect()->to(site_url('admin/etlap'));
        }

        return redirect()->back()->with('error', 'Hibás belépési adatok!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('admin/login'));
    }
}
