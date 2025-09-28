<?php
namespace App\Models;
use CodeIgniter\Model;

/**
 * Description of Uzenetek
 *
 * @author LilJanators
 */

class UzenetekModel extends Model {
    protected $table            = 'uzenetek';
    
    protected $primaryKey = 'id';
    protected $allowedFields = ['nev', 'email', 'idopont', 'letszam', 'uzenet'];
    protected $useTimestamps = false; 
    
}
