<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JoinModel;
use App\Mail\ConfirmJoin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Drive\UploadImage;

class JoinController extends Controller
{
    public function addJoin(Request $request)
    {
    	$rules = [
    		'nombre' => 'required|string|min:3|max:255',
    		'correo' => 'required|string|email|max:255',
    		'telefono' => 'required|digits:10',
    		'fecha' => 'required|after_or_equal:fecha'
    		
    	];
    	$validator = Validator::make($request->all(),$rules);

    	if ($validator->fails()) {
    		return redirect('')->with('failed','Error al guardar datos, intente de nuevo.: ');
    	}
    	else{
    		$data = $request->input();
    		try{
    			$join = new JoinModel;
    			$join->name = $data['nombre'];
    			$join->email = $data['correo'];
    			$join->telefono = $data['telefono'];
    			$join->birthday = $data['fecha'];

    			$file = $request->file('imagen');
    			$name = time()."_".$file->getClientOriginalName();
    			$res = \Storage::disk('local')->put($name,\File::get($file));

    			$upload = new UploadImage();
    			$join->image_url = $upload->uploadFile($name);
    			$join->save();

    			Mail::to($join->email)->send(new ConfirmJoin($join->name,$join->email,$join->telefono,$join->birthday,$join->image_url));
    			
    			return redirect('thankyou')->with('image_url',$join->image_url);
    		}catch(Exception $e){
    			return redirect('')->with('failed','Error al guardar datos, intente de nuevo.: '.$e);
    		}
    		
    	}
    }
}
