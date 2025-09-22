<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['code', 'name', 'department_id', 'position', 'email', 'phone'];

    // Mỗi nhân viên thuộc về một phòng ban
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}

// app/Models/Department.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $fillable = ['name'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
