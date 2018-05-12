<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Repositories\Eloquent\UserDao;

class AdminController extends Controller
{

    private $userDao;
    /**
     * AdminController constructor.
     */
    public function __construct(UserDao $userDao)
    {
        $this->userDao = $userDao;
    }

    public function index()
    {
        return view('admin-home');
    }

    public function switch_()
    {
        if(!is_null(Session::get('adminAsUser')) && !Session::get('adminAsUser'))
        {
            Session::put('adminAsUser',true);
            return redirect()->route('home');
        }
        else if(Session::get('adminAsUser'))
        {
            Session::put('adminAsUser',false);
            return redirect()->route('admin.index');
        }
        else return response("Not Authorized",404);
    }

    public function action(Request $request)
    {
        $action = $this->getAction($request->action);
        $field = $action['field'];
        $value = $action['value'];
        $ids = $request->data;
        $updated = $this->userDao->updateMultipleRecordsByFieldValues('id',$ids,[$field => $value]);
        if($updated)
            return response()->json(array('status' => 'success'));
        return response()->json(array('status' => 'fail'));


    }

    private function getAction($action)
    {

        $field = null;
        $value = null;
        switch ($action)
        {
            case 'delete';
            break;

            case 'soft_delete';
            $field = 'is_deleted';
            $value = 1;
            break;

            case 'ban';
            $field = 'banned';
            $value = 1;
            break;

            case 'active';
            $field = 'banned';
            $value = 0;
            break;

        }
        return array('field'=>$field,'value' => $value);
    }
}
