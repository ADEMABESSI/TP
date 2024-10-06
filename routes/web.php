<?php
use Illuminate\Support\Facades\Route;
use App\http\Controllers\EtudiantController;
Route::get('/',function(){
    return view('etudiant');  
});
Route::get('/etudiant',[EtudiantController::class,'index']);