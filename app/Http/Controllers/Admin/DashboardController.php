<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class DashboardController extends Controller
{
    public function index(){
        return view('admin.pages.dashboard.dashboard');
    }
    public function anyData(Request $request){
        $columns[]='id';
        $columns[]='full_name';
        $columns[]='email';
        $columns[]='address';
        $columns[]='gender';
        $columns[]='phone_number';
        $columns[]='type';
        $columns[]='permissions.name';
     

        $limit=$request->input('length');
        $start=$request->input('start');
        $filter_department=$request->input('filter_department');
        $order=$columns[$request->input('order.0.column')];
        $dir=$request->input('order.0.dir');   
        
        $totalData=User::count();
        $totalFiltered=$totalData;
        // $userID=Auth::user()->id;

        if(empty($filter_department)){
            if(empty($search)){
                $users=User::join('departments','users.department_id','=','departments.id')
                ->select('users.*','departments.name as departmentName')
                ->where('users.type','!=','AdminSystem')
                ->offset($start)
                ->limit($limit)
                ->orderByDesc($order,$dir)->get();
            }else{
                $users=User::join('departments','users.department_id','=','departments.id')
                ->select('users.*','departments.name as departmentName')
                ->Where(function($query)use($search){
                    $query->where('users.full_name','like',"%{$search}%")
                            ->orWhere('users.email','like',"%{$search}%");   
                })
                ->where('type','!=','AdminSystem')
                ->offset($start)
                ->limit($limit)
                ->orderByDesc($order,$dir)
                ->get();
                $totalFiltered =$users->count();
            }
        }else {
            if(empty($search)){
                $users=User::join('departments','users.department_id','=','departments.id')
                ->select('users.*','departments.name as departmentName')
                ->where('users.type','!=','AdminSystem')
                ->where('departments.id','like',"%{$filter_department}%")
                ->offset($start)
                ->limit($limit)
                ->orderByDesc($order,$dir)->get();
            }else{
                $users=User::join('departments','users.department_id','=','departments.id')
                ->select('users.*','departments.name as departmentName')
                ->where('departments.id','like',"%{$filter_department}%")
                ->Where(function($query)use($search){
                    $query->where('users.full_name','like',"%{$search}%")
                            ->orWhere('users.email','like',"%{$search}%");   
                })
                ->where('type','!=','AdminSystem')
                ->offset($start)
                ->limit($limit)
                ->orderByDesc($order,$dir)
                ->get();
                $totalFiltered =$users->count();
            }
        }
        

        $json_data=array(
            "recordsTotal"=>intval($totalData),
            "recordsFiltered"=>intval($totalFiltered),
            "data"=>$users,
        );
        return json_encode($json_data);
    }
    public function anyData2(){
        $users= User::get();
        return $users;
    }
    public function insert(Request $request){
        $users=new User();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=Hash::make("abc123456");
        $users->save();
        if(!$users){
            return response()->json([
                'status'=>0,
                'message'=>"Đã xảy ra lỗi",
                'code'=>500
            ]);
        }

            return response()->json([
                'status'=>1,
                'message'=>"Cập nhật dữ liệu thành công",
                'code'=>200
            ]);
    }
    
}
