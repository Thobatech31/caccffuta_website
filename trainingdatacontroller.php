



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trainingtable;
use DataTables;



class TrainingDatabaseDataController extends Controller
{
    
    public function getData(){
        return view('databaseData.trainingtabledata');
        
    }

     public function fetchData(){
        $trainingtable = trainingtable::all();
        return DataTables::of($trainingtable)->make(true);
        
    }
}
