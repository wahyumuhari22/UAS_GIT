<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHewanDarat extends Model
{
    protected $table = 'hewan_darat';
    protected $primaryKey = 'id_hewan';

    protected $useAutoIncrement = true;

    // Fields that must be filled
    protected $allowedFields = ['id','nama', 'habitat', 'pola_makan', 'status'];
}
?>
