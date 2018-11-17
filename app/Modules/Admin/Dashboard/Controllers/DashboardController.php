<?php

namespace App\Modules\Admin\Dashboard\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Library\ClassFactory as CF;


class DashboardController extends Controller
{
	public static $view_path = 'admin.dashboard.views.';	

    public function index(){
        return view($this::$view_path.'index');
    }

    public function  getAnalytics(Request $request){
        $data = [];
        $search = $request->search['value'];
        $start = $request->start;
        $length = $request->length;
        $columns = array(
                    'email',
                    'role',
                    'password',
                );

        $dataList = CF::model('User')->get();
        return $dataList;
            
                                $category->limit($length)
                                ->orderBy($columns[$request->order[0]['column']],$request->order[0]['dir'])
                                ->get();

        foreach($category as $k => $each){
            $data[$k][] = $each['category_name'];
            $data[$k][] = $each['type'];
            $data[$k][] = $each['description'];
            $data[$k][] = 0;
            $data[$k][] = $each['status'];
            $data[$k][] = '
                            <button type="button" class="btn btn-mild btn-sm editCategory" onclick="editCategory('.$each['id'].')">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger btn-sm deleteCategory" onclick="deleteCategory('.$each['id'].')" >
                                Delete
                            </button>
                            ';
        }
        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => count($categoryCount),
            "recordsFiltered" => count($categoryCount),
            "data" => $data
        );
        echo json_encode($json_data);
        exit;
    }
}
