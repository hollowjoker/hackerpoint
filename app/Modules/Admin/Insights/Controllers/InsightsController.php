<?php

namespace App\Modules\Admin\Insights\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Library\ClassFactory as CF;


class InsightsController extends Controller
{
    public static $view_path = 'admin.insights.views.';

    public function index()
    {
        return view($this::$view_path . 'index');
    }

    public function getTopPicks() {
        $data = [];
        $user = Auth::guard('admin')->user();

        $dataList = CF::model('User')
            ->leftJoin('items','items.user_id','users.id')
            ->where(
                [
                    ['users.id',$user->id]
                ]
            )
            ->select('items.click','items.rating','item_name')
            ->limit('10')
            ->orderBy('rating','desc')
            ->get();
        
        if(count($dataList)){
            foreach($dataList as $k => $each){
                $data['item'][] = $each->item_name;
                $data['count'][] = $each->click + ($each->rating * 5);
            }
        }

        return response()->json($data);
    }
    public function getRevenue() {
        $data = [];
        $user = Auth::guard('admin')->user();

        for($i = 1; $i <= 12; $i++){
            $month = date('Y-m', mktime(0,0,0, $i,1,date('Y')));
            $monthName = date('F', mktime(0,0,0, $i,1,date('Y')));
            
            $itemData = CF::model('Transaction')
                            ->where('created_at','like','%'.$month.'%')
                            ->sum('discounted_amount');
            $data['months'][] = $monthName;
            $data['counts'][] = $itemData;
        }

        return response()->json($data);
    }
}
