<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Repositories\Eloquent\UserDao;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{

private $userDao;
    /**
     * UserController constructor.
     */
    public function __construct(UserDao $userDao)
    {
        $this->userDao = $userDao;
    }

    public function getUsersPage()
    {
        return view('users');
    }

    public function getBasicData(Request $request)
    {
        $columns = ['id','name','email','banned','created_at','updated_at','paypal_balance','others'];
        $users = $this->userDao->getRecordsByAttributesValues(['is_admin'=>'0'],$columns);
        if ($request->has('id') && $request->id!='Select Filter') {
            $users->where('verified', $request->id);
        }
        $dataTables= DataTables::of($users)

            ->addColumn('select', function ($user) {
                $user_id = $user->id;
                return '<input id="'.$user_id.'"type="checkbox" value="'.$user_id.'" class="child">';
            })
            ->addColumn('balance', function ($user) {
                $paypal_balace = number_format((float)($user->paypal_balance), 2, '.', '');
                $others = number_format((float)($user->others), 2, '.', '');
                $total = number_format((float)$paypal_balace+$others,2,'.','');
                return  "<div class=\"btn-group\" style='width: 120px;'>
                <a   data-toggle=\"tooltip\" title=\"PayPal Balance\" class=\"btn btn-xs btn-default\">$paypal_balace</a>
                <a   data-toggle=\"tooltip\" title=\"Others\" class=\"btn btn-xs btn-default\">$others</a>
                <a   data-toggle=\"tooltip\" title=\"Total\" class=\"btn btn-xs btn-default\">$total</a>
            </div>";
            })
            ->editColumn('banned', function ($user) {
                $route = route('action');
                $user->banned == 1 ? (list($class, $text,$action) = array("btn btn-xs btn-danger", "Banned",'active')) : (list($class, $text, $action) = array("btn btn-xs btn-success", "Active", 'ban'));
                return "<button class='$class' onclick='updateStatusOrDelete(\"$action\",\"$route\",$user->id)'>$text</button>";
            })
            ->addColumn('action', function ($user) {
            return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
        })->rawColumns(['action','select','banned','balance']);


     return   $dataTables->make();
    }
}
