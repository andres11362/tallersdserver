<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
   public function searchImage($name)
   {
       $image = Image::where('name', '=', $name)->get();


       if($image->count() > 0){
           return response()->json('Imagen encontrada');
       }else{
           return response()->json('La imagen no existe');
       }
   }

   public function getImage($name)
   {
       $image = Image::where('name', '=', $name)->first();

       if($image->count() > 0){
           return response()->json(['path' => $image->path ]);
       }else{
           return response()->json('La imagen no existe');
       }

   }

   public function insertImage(Request $request)
   {
       $imageName = $request->name.'.'.$request->image->getClientOriginalExtension();

       $request->image->move(public_path('images'), $imageName);

       Image::create([
           'name' => $request->name,
           'path' => "/images/".$imageName
       ]);

       return response()->json('Imagen insertada correctamente');
   }


}
