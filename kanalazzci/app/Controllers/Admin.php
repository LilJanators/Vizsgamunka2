<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EtlapModel;

class Admin extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('admin/etlap'));
    }

    public function etlap()
    {
        $model = new EtlapModel();
        $data['etelek'] = $model->getEtlap();
        return view('admin/etlap_list', $data);
    }

    public function newEtel()
    {
        $data = [
            'etel' => [
                'id' => null,
                'nev' => '',
                'ar' => '',
                'leiras' => '',
                'kep' => '',
                'etel_kategoria_id' => ''
            ],
            'mode' => 'create'
        ];
        return view('admin/etlap_form', $data);
    }

    public function editEtel($id)
    {
        $model = new EtlapModel();
        $etelek = $model->getEtlap();
        $found = null;
        foreach ($etelek as $e) {
            if ((int)$e['id'] === (int)$id) { $found = $e; break; }
        }
        if (!$found) {
            return redirect()->to(site_url('admin/etlap'));
        }
        $data = ['etel' => $found, 'mode' => 'edit'];
        return view('admin/etlap_form', $data);
    }

    public function saveEtel()
    {
        $id   = $this->request->getPost('id');
        $nev  = $this->request->getPost('nev');
        $ar   = $this->request->getPost('ar');
        $leiras = $this->request->getPost('leiras');
        $kep  = $this->request->getPost('kep');
        $kat  = $this->request->getPost('etel_kategoria_id');

        $db = db_connect();
        $builder = $db->table('etlap');

        if ($id) {
            $builder->where('id', (int)$id)->update([
                'nev' => $nev,
                'ar' => $ar,
                'leiras' => $leiras,
                'kep' => $kep,
                'etel_kategoria_id' => $kat
            ]);
        } else {
            $builder->insert([
                'nev' => $nev,
                'ar' => $ar,
                'leiras' => $leiras,
                'kep' => $kep,
                'etel_kategoria_id' => $kat
            ]);
        }
        return redirect()->to(site_url('admin/etlap'));
    }

    public function deleteEtel($id)
    {
        $db = db_connect();
        $db->table('etlap')->where('id', (int)$id)->delete();
        return redirect()->to(site_url('admin/etlap'));
    }
}
