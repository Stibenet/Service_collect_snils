<?php
/**
 * Created by PhpStorm.
 * User: FatkullinMarsel
 * Date: 15.01.2020
 * Time: 15:47
 */

namespace Models;
use \Illuminate\Database\Eloquent\Model;
/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class BaseModel extends Model{
    public $timestamps = false; //необходима для создания записи в БД
}