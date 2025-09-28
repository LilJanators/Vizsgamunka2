<?php

namespace App\Controllers;

use App\Models\EtelKategoriaModel;
use App\Models\EtlapModel;
use App\Models\UzenetekModel;

class Home extends BaseController
{
    public function index(): string
    {
        $output = [];
        return view('home', $output);
    }
    
    public function etlap()
    {
        $output = [];
        $etelKategoriaModel = new EtelKategoriaModel();
        $etlapModel         = new EtlapModel();
        $output['etlapKategoriak']  = $etelKategoriaModel->getEtelKategoriak();
        $output['etlapElemek']      = $etlapModel->getEtlap();
        
        return view('etlap', $output);
    }
    
    public function rolunk()
    {
        $output = [];
        return view('rolunk', $output);
    }
    
    public function asztalfoglalas()
    {
       $output = [];
        return view('asztalfoglalas', $output);
    }
    
    public function saveMessage()
    {

        $validation = \Config\Services::validation();

        $rules = [
            'nev'       => 'required|min_length[3]',
            'email'     => 'required|valid_email',
            'tel'       => 'required',
            'idopont'   => 'required',
            'letszam'   => 'required',
            'uzenet'    => 'required',
        ];
        
        if (!$this->validate($rules)) {
            return view('asztalfoglalas', [
                'validation' => $this->validator
            ]);
        } else {
            $model = new UzenetekModel();

            $model->save([
                'nev'     => $this->request->getPost('nev'),
                'email'   => $this->request->getPost('email'),
                //'telefon'  => $this->request->getPost('tel'),
                'idopont' => $this->request->getPost('idopont'),
                'letszam' => $this->request->getPost('letszam'),
                'uzenet'  => $this->request->getPost('uzenet'),
            ]);
            return redirect()->to('/uzenetelkuldve');
        }
        
    }
    
    public function uzenetkoszonet()
    {
        $output = [];
        return view('uzenetelkuldve', $output);
    }
}
