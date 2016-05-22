<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model{
    protected $table = 'games';
    protected $primaryKey = 'gameID';

    public function notices(){
        return $this->hasMany('App\Models\Notice');
    }
}
?>