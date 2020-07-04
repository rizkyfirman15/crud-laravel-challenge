<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index()
    {
        return PertanyaanModel::get_all();
    }

    public function create()
    {
        return view('pertanyaan/form');
    }

    public function store(Request $request)
    {
        $request = $request->all();
        unset($request['_token']);
        return PertanyaanModel::store($request);
    }

    public function show($id)
    {
        $value = PertanyaanModel::findById($id);
        return view('pertanyaan/show', compact('value'));
    }

    public function edit($id)
    {
        $value = PertanyaanModel::findById($id);
        return view('pertanyaan/edit', compact('value'));
    }

    public function update(Request $request, $id)
    {
        $value = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id)
    {
        $deleted = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
