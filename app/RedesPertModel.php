<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedesPertModel extends Model
{
    
    public function scopeSearch($query, $s) {
    	return $query->where('nome_rede', 'like', '%' .$s. '%')
    				 ->orWhere('descricao', 'like', '%' .$s. '%');
    }
}
