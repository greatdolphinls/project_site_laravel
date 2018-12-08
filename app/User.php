<?php

namespace App;

//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Bican\Roles\Traits\HasRoleAndPermission;
use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;

use App\Models\Project;
use App\Models\Profile;
use App\Models\ProjectDeveloper;
use App\Models\Task;
use App\Models\Flash;
use App\Models\DateReport;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, HasRoleAndPermissionContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use Authenticatable;
    use CanResetPassword ;
    use HasRoleAndPermission ;

    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['last_login'];


    public function profile(){
        return $this->hasOne(Profile::class,'user_id');
    }

    public function projects(){
        return $this->hasMany(Project::class,'manager_id');
    }

    public function projectDevelopers(){
        return $this->hasMany(ProjectDeveloper::class,'user_id');
    }
    public function Tasks(){
        return $this->hasMany(Task::class,'user_id');
    }

    public function Flashs(){
        return $this->hasMany(Flash::class,'user_id');
    }

    public function DateReports(){
        return $this->hasMany(DateReport::class,'user_id');
    }
}
