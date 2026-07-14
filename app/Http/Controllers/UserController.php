<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->get();

        return view('website.apps.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::orderBy('name')->get();

        return view('website.apps.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $this->userService->store($request->validated());
        return redirect()->route('users.index')->with('message','Staff created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('website.apps.user.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $this->userService->update($request->validated(),$user);

        return redirect()->route('users.index')->with('message', 'Staff Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if (! $this->userService->destroy($user))
        {
            return redirect()->route('users.index')->with('error','Super Admin Cannot be deleted');
        }
        return redirect()->route('users.index')->with('message','Staff Deleted Successfully.');
    }
}
