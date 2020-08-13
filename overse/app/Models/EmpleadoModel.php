<?php namespace App\Models;

use CodeIgniter\Model;

class EmpleadoModel extends Model{
    protected $table= 'empleado';
    protected $primaryKey= 'idE';
    protected $allowedFields=['idE', 'nomE', 'telE', 'esp'];
}