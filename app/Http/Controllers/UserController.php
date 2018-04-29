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

        $columns = ['id','name','email','created_at','updated_at'];
        $users = $this->userDao->getUsers($columns);

        return DataTables::of($users)

            ->addColumn('select', function ($user) {
                return '<input type="checkbox" value="'.$user->id.'" class="child">';
            })
            ->addColumn('action', function ($user) {
            return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
        })->rawColumns(['action','select'])
            ->filter(function ($query) use ($request) {
                $search = $request->search;
                $search_for = $search['value'];
                if ($request->has('id') && $request->id!='Select Filter') {
                    $query->where('status', $request->id);
                }
                if ($search_for!="") {
                    $query->where('email', $search_for);
                }
            })
            ->make();
    }
}
