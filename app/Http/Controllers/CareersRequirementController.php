<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CareersRequirement;//ApplyJob
use App\ApplyJob;
use TCG\Voyager\Http\Controllers\ContentTypes\File;
class CareersRequirementController extends Controller
{	
	//show all careers
    public function show ()
    {
    	$careerItems= CareersRequirement::all();
    	return view('careers.careers',['careerItems'=>$careerItems]);

    }

    public function show_details($id)
    {
    	$careerItem= CareersRequirement::find($id);
    	//dd($careerItem['name']);
    	return view ('careers.career_deatails',['careerItem'=>$careerItem]);
    }
//['id','name','email','phone','Gender','cv'];
    public function applay (request $request)
    {
    	//dd(request('job_name'));
    	//file:: __construct(request('cv'),'apply-jobs','cv');
    	//File file = new File ($request,'apply-jobs','cv');


    	ApplyJob ::create ([

    		'name' =>request('name'),
    		'email' =>request('email'),
    		'phone' =>request('phone'),
    		'Gender' =>request('Gender'),
    		//'cv' =>request('cv')->store('file'),
    		'job_name'=>request('job_name'),
    		
    	] ); 
    	//ApplyJob :: save();

		return redirect('/careers');

    }
}
