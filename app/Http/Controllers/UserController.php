<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of users.
     */
    public function index()
    {
        // Fetch users with pagination
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('Admin.create_user.user_view', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('Admin.create_user.user_create');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        try {
            // ✅ Validation
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6|confirmed',
                'role' => 'required|string|in:admin,employee',
            ]);

            // 🔐 Hash the password
            $validated['password'] = bcrypt($validated['password']);

            // 💾 Create user
            User::create($validated);

            $users = User::orderBy('id', 'desc')->paginate(10);

            return view('Admin.create_user.user_view', [
                'users' => $users,
                'successMessage' => 'User created successfully!',
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            $users = User::orderBy('id', 'desc')->paginate(10);
            return view('Admin.create_user.user_view', [
                'users' => $users,
                'errorMessage' => 'Something went wrong: ' . $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified user details.
     */
    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('Admin.create_user.user_details', compact('user'));
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.create_user.user_details')
                ->with('error', '⚠️ User not found or deleted.');
        }
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('Admin.create_user.user_details', compact('user'));
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.users.index')
                ->with('error', 'Employee not found.');
        }
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            // ✅ Validate
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'nullable|string|min:6|confirmed',
                'role' => 'required|string|in:admin,employee',
            ]);

            // 🔍 Find user
            $user = User::findOrFail($id);

            // 🔑 Hash new password if provided
            if (!empty($validated['password'])) {
                $validated['password'] = bcrypt($validated['password']);
            } else {
                unset($validated['password']);
            }

            // 🔁 Update
            $user->update($validated);

            $users = User::orderBy('id', 'desc')->paginate(10);
            return view('Admin.create_user.user_view', [
                'users' => $users,
                'successMessage' => 'User updated successfully!',
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            $users = User::orderBy('id', 'desc')->paginate(10);
            return view('Admin.create_user.user_view', [
                'users' => $users,
                'errorMessage' => 'Something went wrong: ' . $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return redirect()
                ->route('admin.create_user.index', ['success' => 'User deleted successfully!']);
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.create_user.index', ['error' => 'Failed to delete user: ' . $e->getMessage()]);
        }
    }
}
