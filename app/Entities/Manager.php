<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

/**
 * Class Manager.
 *
 * @package namespace App\Entities;
 */
class Manager extends Model implements Transformable, AuthenticatableContract, AuthorizableContract
{
    use TransformableTrait, SoftDeletes, Sortable, Authenticatable, Authorizable;

    protected $table = 'managers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'gender',
        'birthday',
        'rule',
        'note',
    ];


    public $sortable = [
        'id',
        'email',
        'first_name',
        'last_name',
        'rule',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

}
