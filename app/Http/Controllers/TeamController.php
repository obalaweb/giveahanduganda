<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller {

	public function index() {
		$teams = Team::all();

		return view('teams.index', compact('teams'));
	}

	public function show(Team $volunteer, Request $request) {
		return view('teams.show', compact('volunteer'));
	}

	public function create() {
		return view('teams.create');
	}

	public function store(Request $request) {
		$input = $request->all();

		$user = new User();

		$user->name = $input['name'];
		$user->email = $input['email'];
		$user->password = Hash::make('password');
		if ($user->save()) {
			return response()->json(['name' => $user->name]);
		} else {
			return response()->json('Error');
		};
	}
}
