<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserSignUpController extends Controller
{
  
    public function create()
    {
        
    }

 //this is to store the users and their items
    public function store(Request $request)
    {
      
        $validateData=$request->validate([
            "firstname"=>"required",
            "lastname"=>"required",
            "email"=>"required|email",
            "password"=>"required",
            "phone"=>"required",

        ]
        );
        $user=new User();
        $user->firstname=$validateData['firstname'];
        $user->lastname=$validateData['lastname'];
        $user->email=$validateData['email'];
        $user->password=$validateData['password'];
        $user->phone=$validateData['phone'];
     $savedNewUser=$user->save();
     if($savedNewUser){
        return redirect('/login')->with("The account was created successfully");
     }
     else{
        return redirect()->back()->with("Some thing went wrong please check email and phone and try again");
     }
    
      
    }

    //this is to make authantication and authorization
    public function loginUser(Request $request){
        $validateLogin=$request->validate([
           "email"=>"required|email",
           "password"=>"required"
        ]);
        
        //let me check if in the database there is any person with credentials
   $credentials=$request->only('email' , 'password');   
        if(Auth::attempt($credentials)){
          return "The user is allowed to continue";
        }
   else{
       return  redirect()->back()->with("error","Invalid email or password");
   }
       }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Show the details of a specific user
        // You can add your logic here to fetch and display the user details
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Show the form view for editing a specific user
        // You can return a view here to display the edit form
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Update the user data in the database
        // You can add your logic here to update the data or perform any other actions
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete a specific user from the database
        // You can add your logic here to delete the user or perform any other actions
    }
}
