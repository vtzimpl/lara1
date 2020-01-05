<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   // protected $fillable=['projname','projimage'];
   protected $fillable=['projimage', 'projnbr', 'projname', 'projtype', 'projstatus', 'projmaker', 'projdoc', 'projcomments', 'proj1stordername', 'projunits', 'proj1starrivaldate', 'projopeneddate', 'projprimetargetmarket ,projgraphics', 'projpresentation', 'projmaturityour', 'projmaturitysupplier', 'projsampletargetdate', 'projprodtargetdate', 'projpauseddate', 'projreasonpaused', 'projreasonrejected', 'projrejecteddate'];
}