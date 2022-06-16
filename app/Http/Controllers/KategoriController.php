<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Kategori;
use App\Models\Style;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function get_kategori()
    {
        $data = Kategori::all();

        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('nama', function($d){
                return $d->nama;
            })
            ->addColumn('ids', function($d) {
                $dt = Image::where('kategori_id', $d->id)->get()->count();
                if ($dt > 0) {
                    # code...
                    // return '<input type="checkbox" class="sub_chk" data-id="'.$d->id.'" disabled>';
                } else {
                    # code...
                    return '<input type="checkbox" class="sub_chk" data-id="'.$d->id.'">';
                }

            })
            ->addColumn('aksi', function($d){
                return '<a href="'.url('kategori-detail/'.$d->id).'">
                            <button class="btn btn-outline-info btn-sm"><i class="fas fa-eye"></i></button>
                        </a>
                        <a data-toggle="modal" data-target="#edit" class="edit" data-attr="" data-id="'.$d->id.'">
                            <button class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i></button>
                        </a>
                        <a data-toggle="modal" data-target="#hapus" class="hapus" data-attr="" data-id="'.$d->id.'">
                            <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </a>';
            })
            ->rawColumns(['aksi', 'ids'])
            ->make(true);
    }

    function detail_kategori($id)
    {
        $style = Style::all();
        $kat = Kategori::all();
        return view('detail_kat', compact('style', 'kat'));
    }

    function create_kategori(Request $request)
    {
        if (isset($request->id)) {
            $data = Kategori::find($request->id);

            $data->id = $request->id;
            $data->nama = $request->nama;
            $data->save();

            return response()->json([
                'error' => false,
                'msg' => 'Data Berhasil Diubah'
            ]);
        } else {
            Kategori::create([
                'nama' => $request->nama,
            ]);

            return response()->json([
                'error' => false,
                'msg' => 'Data Berhasil Disimpan'
            ]);
        }
    }

    function show_kategori(Request $request)
    {
        $data = Kategori::find($request->id);

        return response()->json([
            'error' => false,
            'msg' => 'Data ada',
            'data' => $data,
        ]);
    }

    function delete_kategori(Request $request)
    {
        $data = Kategori::where('id',$request->id)->count();

        if ($data > 0) {
            $dt = Image::where('kategori_id', $request->id)->get()->count();
            if ($dt > 0) {
                # code...
                return response()->json([
                    'error' => true,
                    'msg' => 'Data Sudah Digunakan'
                ]);
            } else {
                # code...
                // Kategori::where('id',$request->id)->delete();

                return response()->json([
                    'error' => false,
                    'msg' => 'Data Berhasil dihapus'
                ]);
            }

        } else {
            return response()->json([
                'error' => true,
                'msg' => 'Data Tidak ditemukan'
            ]);
        }

    }

    function delete_all(Request $request)
    {
        $ids = $request->ids;
        Kategori::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Icon Deleted successfully."]);
    }
}
