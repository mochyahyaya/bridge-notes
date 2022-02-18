<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statu;
use App\Models\User;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Validator;

class StatusController extends Controller
{
    public function index()
    {
        return Statu::all();

    }

    public function store()
    {
        request()->validate([
            'user_id'   => 'required',
            'status'    => 'required',
            'position'  => 'required',
        ]);

        Statu::create([
            'user_id'   => request('user_id'),
            'status'    => request('status'),
            'position'  => request('position')
        ]);
    }

    public function update(Statu $status)
    {
        request()->validate([
            'user_id'   => 'required',
            'status'    => 'required',
            'position'  => 'required',
        ]);

        $success =$status->update([
            'user_id'   => request('user_id'),
            'status'    => request('status'),
            'position'  => request('position')
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Statu $status)
    {
        $success = $status->delete();

        return [
            'success' => $success
        ];
    }
}
