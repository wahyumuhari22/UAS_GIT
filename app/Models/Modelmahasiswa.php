<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table = 'mahasiswa046';
    protected $primaryKey = 'id_mahasiswa046';

    protected $useAutoIncrement = true;

    // Fields that must be filled
    protected $allowedFields = ['nim046', 'nama046', 'tmplahir046', 'tgllahir046', 'jenkel046'];
}
?>
