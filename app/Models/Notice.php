<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model{
    protected $table = 'notices';
    protected $primaryKey = 'noticesID';

    public function games(){
        return $this->belongsTo('App\Models\Game','gameID');
    }
}
?>