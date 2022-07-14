<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    use HasFactory;
	protected $table = 'admin';
	protected $fillable = [
        'name',
        
    ];
	
	function adminList(){
		
		$query = DB::table('admin')
         
         -> get();
      return $query;
		
	}
	
	
		
		

	
	
	
}
