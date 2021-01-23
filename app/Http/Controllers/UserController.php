<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getUser(Request $request){
        $request->validate([
            "username"=>"required",
            "password"=>"required"
        ]);

        //return $request->input("username");
        return view('pages.profile', ["username"=>$request->input('username')]);
    }

    public function index($id){
        return DB::select('select * from users where id =' . $id);
    }

    public function getAllUsers(){                            //Using User model to get all user data
        return User::all();
    }

    //if the table name is users, Model name must be Users, to get automatic connectivity
    //but we can change also to use like, table name emp and model name also emp

    public function getUsersData(){                  // Getting data from api using Http client
        $collection = Http::get('https://reqres.in/api/users?page=1'); // using get method
        return view('pages.users', ['collection' => $collection['data']]);
    }

    public function addUser(Request $request)
    {   
        $user = new User;
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->password = $request->password;
        $user->save(); //will give error as laravel expects two columns named `updated_at`, `created_at`, so either create it or use $timestamps = false
        $request->session()->flash('user', $user->user_name);  // Using flash session, which remains for one small time
        return redirect('register');
    }

    public function showAllUsers()
    {
        $data = User::paginate(5);                        //Also know simplePaginate()
        return view('pages.allusers', ['users' => $data]);
    }

    public function deleteUser(Request $request, $id)
    {
        $data = User::find($id);  //id column name must be 'id' to use it, here our id is named as 'uid' so its not working
        $data->delete();
        $request->session()->flash('deleted', 'deleted');
        return redirect('allusers');
       
    }

    public function showData($id){
        $data = User::find($id);
        return view('pages.edit', ["data" => $data]);
    }

    public function editUser(Request $request)
    {   $data = User::find($request->id);
        $data->id = $request->id;
        $data->user_name = $request->user_name;
        $data->email = $request->email;
        $data->city = $request->city;
        $data->password = $request->password;
        $data->save();
        $request->session()->flash('edited', 'edited');
        return redirect('allusers');

    }
    
    public function databaseOperations()
    {
        return DB::table('users')->get();            // Get all data from a table
        //return (array)DB::table('users')->find(6);   //Find by id
        /*return DB::table('users')->insert(             //Insert
            [
                'user_name' => 'preeti19',
                'email' => 'preeti19@rj.com',
                'password' => 'preeti123'
            ]
        ); */
        /*return DB::table('users')->where('id', 10)->update(     //Update
            [
                'user_name' => 'Preeti19',
                'email' => 'preeti19@rj.com',
                'password' => 'preeti123'
            ]
        ); */

        //return DB::table('users')->where('id', 10)->delete();   //Delete

        // Agregate Functions =====>

        //return DB::table('users')->avg('id');   //Average
        //return DB::table('users')->count();     //Count
        //return DB::table('users')->min('id');     //Minimum
        //return DB::table('users')->max('id');     //Maximum

    }

    public function getUserJob()  //Join Concept
    {
        //return DB::table('users')->join('company', 'users.id',  '=', 'company.emp_id')->get();
        //return DB::table('users')->join('company', 'users.id',  '=', 'company.emp_id')->select('company.*')->get();
    }

    
}
