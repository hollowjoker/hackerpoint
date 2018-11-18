<?php

namespace App\Modules\Admin\Products\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Library\ClassFactory as CF;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
	public static $view_path = 'admin.products.views.';	

    public function index(){
        return view($this::$view_path.'index');
    }

    public function showForm() {
        return view($this::$view_path.'add');
    }

    public function create(Request $request) {
        $data = [];
        $user = Auth::guard('admin')->user();
        $validator = Validator::make($request->all(),[
            'item_category_id' => 'required',
            'item_name' => 'required',
            'price' => 'required',
            'qty' => 'required',
        ]);
        
        if($validator->fails()){
            $data['type'] = 'error';
            $data['message'] = $validator->errors();

            return $data;
        }
        
        if($request->id == ''){
            $userData = CF::model('User')
            ->leftJoin('stores','stores.user_id','users.id')
            ->select('stores.id')
            ->where('users.id',$user->id)
            ->get();
            
            $dataCreated = CF::model('Item')->create([
                'store_id' => $userData[0]->id,
                'user_id' => $user->id,
                'item_category_id' => $request->item_category_id,
                'item_name' => $request->item_name,
                'price' => $request->price,
                'qty' => $request->qty,
                'description' => $request->description,
                'type' => 'product',
            ]);

                
            $cover = $request->file('file');
            $extension = $cover->getClientOriginalExtension();
            if($cover->getSize() > 0){
                $getData = CF::model('Item')->find($dataCreated->id);
                $filePath = 'ImageUploads\\'.$user->id.'\\'.$dataCreated->id.'\\'.$cover->getFilename().'.'.$extension;
                $getData->update(['qr_file' => $filePath]);
                Storage::disk('public')->put($filePath,  File::get($cover));
            }
            $data['message'] = 'Creating of Item successful!';
        }
        else{
            $update = CF::model('Item')->find($request->id);
            $update->update($request->all());
            $data['message'] = 'Updating of Item successful!';
        }
        $data['type'] = 'success';

        return response()->json($data);;
    }

    public function showList() {
        $data = [];
        $user = Auth::guard('admin')->user();

        $dataList = CF::model('item')
            ->leftJoin('users','users.id','items.user_id')
            ->leftJoin('stores','stores.id','items.store_id')
            ->limit(10)
            ->where([
                ['items.user_id',$user->id],
            ])
            ->orderBy('items.created_at','desc')
            ->select(
                'items.price','items.qty','items.item_name','items.id',
                'stores.store_name','items.qr_file'
            )
            ->get();

        if(count($dataList)){
            $i = 0;
            foreach($dataList as $i => $each){
                $data[$i]['id'] = $each->id;
                $data[$i]['store_name'] = $each->store_name;
                $data[$i]['price'] = number_format($each->price,2);
                $data[$i]['qty'] = $each->qty;
                $data[$i]['item_name'] = $each->item_name;
                $data[$i]['qr_file'] = Storage::url($each->qr_file);
            }
        }

        return $data;

        return response()->json($data); 
    }

    
}
