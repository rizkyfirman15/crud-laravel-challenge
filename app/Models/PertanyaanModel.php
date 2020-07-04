<?php

namespace App\Models;

use Illuminate\support\Facades\DB;

class PertanyaanModel
{

    public static function get_all()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view("index", ['pertanyaan' => $pertanyaan]);
    }

    public static function store($request)
    {
        $pertanyaanBaru = DB::table('pertanyaan')->insert($request);
        $pertanyaan = DB::table('pertanyaan')->get();

        if ($pertanyaanBaru && $pertanyaan) {
            return view('index', ['pertanyaan' => $pertanyaan]);
        }
    }

    public static function findById($id)
    {
        $value = DB::table('pertanyaan')->where('id', $id)->first();
        return $value;
    }

    public static function update($id, $request)
    {
        $value = DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi'],
                'tgl_dibuat' => $request['tgl_dibuat'],
                'tgl_diperbaharui' => $request['tgl_diperbaharui'],
            ]);
        return $value;
    }

    public static function destroy($id)
    {
        $deleted = DB::table('pertanyaan')
            ->where('id', $id)
            ->delete();
        return $deleted;
    }
}
