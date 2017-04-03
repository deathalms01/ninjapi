<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use App\User;
use App\Log;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminController extends Controller
{
    use SoftDeletes;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    protected $fillable = [
        'name', 'username', 'surname', 'dob','email', 'password', 'type', 'created_by',
    ];

    protected $dates = ['deleted_at'];

    public function index()
    {
        $logs = Log::paginate(10);
        return view('admin.index', compact('logs'));
    }

    public function users(){
        $data = User::paginate(10);
        return view('admin.user', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|max:255',
                'username' => 'required|min:6',
                'surname' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6|confirmed',
            ]);
        
        $user = new User;

        $user -> created_by = Auth::user()->username;
        $user -> name = ucfirst($request->name);
        $user -> surname =  ucfirst($request->surname);
        $user -> username = $request->username;
        $user -> email = $request->email;
        $user -> dob = $request->dob;
        $user -> type = $request->type;
        $user -> password = bcrypt($request->password);

        $user->save();
        self::logCreate(Auth::user()->id, $request->username);
        return redirect('/user/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user -> created_by = Auth::user()->username;
        $user -> name = ucfirst($request->name);
        $user -> surname =  ucfirst($request->surname);
        $user -> username = $request->username;
        $user -> email = $request->email;
        $user -> dob = $request->dob;
        $user -> type = $request->type;
        if($request->password == Auth::user()->password){
            $user-> password = $request->password;
        }
        else{
            $user -> password = bcrypt($request->password);
        }
        $user->update();
        //$user->update($request->all());
        return view('admin.updatesuccecss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        self::logDestroy(Auth::user()->id, $id);
        return redirect('/user');
    }

    public function logCreate($user_id, $table_id){
        $log = new Log;

        $log -> activity = 'Add';
        $log -> table = 'Users';
        $log -> user_id = $user_id;
        $log -> created_id = $table_id;

        $log->save();
    }

    public function logDestroy($user_id, $table_id){
        $log = new Log;

        $log -> activity = 'Delete';
        $log -> table = 'Users';
        $log -> user_id = $user_id;
        $log -> created_id = $table_id;

        $log->save();
    }
    public function success(){
        return view('admin.success');
    }
}
