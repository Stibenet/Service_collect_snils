<?php
/**
 * Created by PhpStorm.
 * User: FatkullinMarsel
 * Date: 14.01.2020
 * Time: 13:29
 */

namespace Models;
use \Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Organization extends BaseModel{

    protected $table = "organization";
    protected $fillable = array("id", "name_organization");
}