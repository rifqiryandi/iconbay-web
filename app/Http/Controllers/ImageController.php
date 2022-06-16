<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Kategori;
use App\Models\Style;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use STS\ZipStream\ZipStream;
use ZanySoft\Zip\Zip as ZipZip;
use Zip;
use ZipArchive;

class ImageController extends Controller
{
    function get_data(Request $request)
    {
        try {
            $data = Image::all();
            $x = [];
            foreach($data as $d) {
                $x[] = [
                    'nama' => $d->nama,
                    'kategori' => $d->kategori->nama,
                    'gambar' => asset('upload/'.$d->filepath),
                    // 'gambar' => file_get_contents(public_path('/upload').'/'.$d->filepath)
                    // 'gambar' => base64_decode($d->filepath)
                ];
            }
            return response()->json($x);
            // return response()->json($data); ->header('Content-Type', 'image/svg+xml')
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'msg' => $e->getMessage()]);
        }
    }

    function store_data(Request $request)
    {
        try {
            if (isset($request->id)) {
                $images = Image::find($request->id);

                $images->id = $request->id;
                $images->nama = $request->nama;
                $images->kategori_id = $request->kategori_id;
                $images->style_id = $request->style_id;
                $image = $request->file('filepath');
                if ($request->style_id == 1) {
                    if (request()->hasFile('filepath') && request('filepath') != '') {
                        // if(file_exists(public_path('upload/'.$images->nama.'.svg'))){
                        //     unlink(public_path('upload/'.$images->nama.'.svg'));
                        // }
                        $path = 'upload/light/';
                        $nameImage = 'light/'.$image->getClientOriginalName();
                        $image->move($path, $nameImage);
                        // $nameImage = base64_encode(file_get_contents($image));
                        $images->filepath = $nameImage;
                    }
                } else if($request->style_id == 2) {
                    if (request()->hasFile('filepath') && request('filepath') != '') {
                        // if(file_exists(public_path('upload/'.$images->nama.'.svg'))){
                        //     unlink(public_path('upload/'.$images->nama.'.svg'));
                        // }
                        $path = 'upload/broken/';
                        $nameImage = 'broken/'.$image->getClientOriginalName();
                        $image->move($path, $nameImage);
                        // $nameImage = base64_encode(file_get_contents($image));
                        $images->filepath = $nameImage;
                    }
                } else if($request->style_id == 3) {
                    if (request()->hasFile('filepath') && request('filepath') != '') {
                        // if(file_exists(public_path('upload/'.$images->nama.'.svg'))){
                        //     unlink(public_path('upload/'.$images->nama.'.svg'));
                        // }
                        $path = 'upload/bold/';
                        $nameImage = 'bold/'.$image->getClientOriginalName();
                        $image->move($path, $nameImage);
                        // $nameImage = base64_encode(file_get_contents($image));
                        $images->filepath = $nameImage;
                    }
                } else if($request->style_id == 4) {
                    if (request()->hasFile('filepath') && request('filepath') != '') {
                        // if(file_exists(public_path('upload/'.$images->nama.'.svg'))){
                        //     unlink(public_path('upload/'.$images->nama.'.svg'));
                        // }
                        $path = 'upload/bulk/';
                        $nameImage = 'bulk/'.$image->getClientOriginalName();
                        $image->move($path, $nameImage);
                        // $nameImage = base64_encode(file_get_contents($image));
                        $images->filepath = $nameImage;
                    }
                } else if($request->style_id == 5) {
                    if (request()->hasFile('filepath') && request('filepath') != '') {
                        // if(file_exists(public_path('upload/'.$images->nama.'.svg'))){
                        //     unlink(public_path('upload/'.$images->nama.'.svg'));
                        // }
                        $path = 'upload/twotones/';
                        $nameImage = 'twotones/'.$image->getClientOriginalName();
                        $image->move($path, $nameImage);
                        // $nameImage = base64_encode(file_get_contents($image));
                        $images->filepath = $nameImage;
                    }
                }


                $images->save();

                return response()->json([
                    'error' => false,
                    'msg' => 'Data Berhasil Diubah'
                ]);
            } else {
                $images = new Image();
                $images->nama = $request->nama;
                $images->kategori_id = $request->kategori_id;
                $images->style_id = $request->style_id;
                $image = $request->file('filepath');
                if($request->style_id == 1) {
                    if ($image) {
                        $path = 'upload/light/';
                        $nameImage = 'light/'.$image->getClientOriginalName();
                        $image->move($path, $nameImage);
                        // $nameImage = base64_encode(file_get_contents($image));
                        $images->filepath = $nameImage;
                    }
                } else if($request->style_id == 2) {
                    if ($image) {
                        $path = 'upload/broken/';
                        $nameImage = 'broken/'.$image->getClientOriginalName();
                        $image->move($path, $nameImage);
                        // $nameImage = base64_encode(file_get_contents($image));
                        $images->filepath = $nameImage;
                    }
                } else if($request->style_id == 3) {
                    if ($image) {
                        $path = 'upload/bold/';
                        $nameImage = 'bold/'.$image->getClientOriginalName();
                        $image->move($path, $nameImage);
                        // $nameImage = base64_encode(file_get_contents($image));
                        $images->filepath = $nameImage;
                    }
                } else if($request->style_id == 4) {
                    if ($image) {
                        $path = 'upload/bulk/';
                        $nameImage = 'bulk/'.$image->getClientOriginalName();
                        $image->move($path, $nameImage);
                        // $nameImage = base64_encode(file_get_contents($image));
                        $images->filepath = $nameImage;
                    }
                } else if($request->style_id == 5) {
                    if ($image) {
                        $path = 'upload/twotones/';
                        $nameImage = 'twotones/'.$image->getClientOriginalName();
                        $image->move($path, $nameImage);
                        // $nameImage = base64_encode(file_get_contents($image));
                        $images->filepath = $nameImage;
                    }
                }

                $images->save();

                return response()->json([
                    'error' => false,
                    'msg' => 'Data Berhasil Disimpan'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'msg' => $e->getMessage()]);
        }
    }

    function store_data_pack(Request $request)
    {
        try {
            $request->validate([
                'zip.*' => 'mimes:zip|required'
            ]);
            $zipp = $request->file('zip');
            if ($zipp) {
                $path = 'u';
                $namezip = $zipp->getClientOriginalName();
                $zipp->move(public_path(), $namezip);
            }

            $zip = new ZipArchive;
            $zip->open(public_path().'/'.$namezip, ZipArchive::CREATE);

                $arr = [];
                $arr_name = [];

                for($ii = 1; $ii < $zip->numFiles; $ii++){
                    $s = $zip->statIndex($ii);
                    $arr[] = [explode("\r", basename($s['name']). PHP_EOL, 2)[0]];
                    $arr_name[] = [explode(".svg", basename($s['name']). PHP_EOL, 2)[0]];
                    $folder = strtok($s['name'], "/");
                }
                $zip->extractTo(public_path('temp/'));
                $zip->close();


                $files = [];
                $xx = [];
                for($i = 0; $i < count($arr_name); $i++) {
                    if ($request->style_id == 1) {
                        $xx[] = [
                            'nama' => implode('', $arr_name[$i]),
                            'kategori_id' => $request->kategori_id,
                            'style_id' => $request->style_id,
                            'filepath' => 'light/'.implode('',$arr[$i]),
                        ];
                        File::move(public_path('temp/'.$folder.'/'.implode('',$arr[$i])), public_path('upload/light/'.implode('',$arr[$i])));
                        # code...
                    } else if($request->style_id == 2) {
                        $xx[] = [
                            'nama' => implode('', $arr_name[$i]),
                            'kategori_id' => $request->kategori_id,
                            'style_id' => $request->style_id,
                            'filepath' => 'broken/'.implode('',$arr[$i]),
                        ];
                        File::move(public_path('temp/'.$folder.'/'.implode('',$arr[$i])), public_path('upload/broken/'.implode('',$arr[$i])));
                    } else if($request->style_id == 3) {
                        $xx[] = [
                            'nama' => implode('', $arr_name[$i]),
                            'kategori_id' => $request->kategori_id,
                            'style_id' => $request->style_id,
                            'filepath' => 'bold/'.implode('',$arr[$i]),
                        ];
                        File::move(public_path('temp/'.$folder.'/'.implode('',$arr[$i])), public_path('upload/bold/'.implode('',$arr[$i])));
                    } else if($request->style_id == 4) {
                        $xx[] = [
                            'nama' => implode('', $arr_name[$i]),
                            'kategori_id' => $request->kategori_id,
                            'style_id' => $request->style_id,
                            'filepath' => 'bulk/'.implode('',$arr[$i]),
                        ];
                        File::move(public_path('temp/'.$folder.'/'.implode('',$arr[$i])), public_path('upload/bulk/'.implode('',$arr[$i])));
                    } else if($request->style_id == 5) {
                        $xx[] = [
                            'nama' => implode('', $arr_name[$i]),
                            'kategori_id' => $request->kategori_id,
                            'style_id' => $request->style_id,
                            'filepath' => 'twotones/'.implode('',$arr[$i]),
                        ];
                        File::move(public_path('temp/'.$folder.'/'.implode('',$arr[$i])), public_path('upload/twotones/'.implode('',$arr[$i])));
                    }
                }
                Image::insert($xx);
                $del = new Filesystem;
                $del->cleanDirectory(public_path('temp'));
                File::delete(public_path('/'.$namezip));
                echo 'ok';

        } catch (\Exception $e) {
            return response()->json(['error' => true, 'msg' => $e->getMessage()]);
        }
    }

    function show_images(Request $request)
    {
        $data = Image::find($request->id);

        return response()->json([
            'error' => false,
            'msg' => 'Data ada',
            'data' => $data,
        ]);
    }

    function to_frontend()
    {
        $data = Image::where('style_id', 1)->get();
        $kat = Kategori::whereHas('gambar', function($q) {
            $q->where('style_id', 1);
        })->withCount('gambar')->get();
        // return $data
        return view('line', compact('data', 'kat'));
    }

    function to_frontend1()
    {
        $data = Image::where('style_id', 2)->get();
        $kat = Kategori::whereHas('gambar', function($q) {
            $q->where('style_id', 2);
        })->withCount('gambar')->get();
        return view('line_color', compact('data', 'kat'));
    }

    function to_frontend2()
    {
        $data = Image::where('style_id', 3)->get();
        $kat = Kategori::whereHas('gambar', function($q) {
            $q->where('style_id', 3);
        })->withCount('gambar')->get();
        return view('solid', compact('data', 'kat'));
    }

    function to_frontend3()
    {
        $data = Image::where('style_id', 4)->get();
        $kat = Kategori::whereHas('gambar', function($q) {
            $q->where('style_id', 4);
        })->withCount('gambar')->get();
        return view('solid_color', compact('data', 'kat'));
    }

    function to_frontend4()
    {
        $data = Image::where('style_id', 5)->get();
        $kat = Kategori::whereHas('gambar', function($q) {
            $q->where('style_id', 5);
        })->withCount('gambar')->get();
        return view('multi_color', compact('data', 'kat'));
    }

    function list_svg(Request $request)
    {
        if ($request->cari != '') {
            $data = Image::where('nama', 'like', '%'.$request->cari.'%')->get();
        } else if ($request->filter != '') {
            $data = Image::where('kategori_id', '=', $request->filter)->get();
        } else if ($request->filter != '' && $request->cari != '') {
            $data = Image::where('kategori_id', '=', $request->filter)->where('nama', 'like', '%'.$request->cari.'%')->get();
        } else {
            $data = Image::all();
        }
        return $data;
    }

    function to_image()
    {
        $style = Style::all();
        $kat = Kategori::all();
        return view('gambar', compact('style', 'kat'));
    }

    function get_image(Request $request)
    {
        if (isset($request->katid)) {
            $data = Image::where('kategori_id', $request->katid)->get();

            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('icon', function($d) {
                    return '<img src="'.asset('upload/'.$d->filepath).'" alt="" srcset="" width=50 height=50>';
                })
                ->addColumn('name', function($d) {
                    return $d->nama;
                })
                ->addColumn('ids', function($d) {
                    return $d->id;
                })
                ->addColumn('style', function($d) {
                    return $d->style->nama;
                })
                ->addColumn('kategori', function($d) {
                    return $d->kategori->nama;
                })
                ->addColumn('aksi', function($d) {
                    return '<a data-toggle="modal" data-target="#edit" class="edit" data-attr="" data-id="'.$d->id.'">
                                <button class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></button>
                            </a>
                            <a data-toggle="modal" data-target="#hapus" class="hapus" data-attr="" data-id="'.$d->id.'">
                                <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </a>';
                })
                ->rawColumns(['aksi', 'icon'])
                ->make(true);
        } else {
            $data = Image::all();

            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('icon', function($d) {
                    return '<img src="'.asset('upload/'.$d->filepath).'" alt="" srcset="" width=50 height=50>';
                })
                ->addColumn('name', function($d) {
                    return $d->nama;
                })
                ->addColumn('ids', function($d) {
                    return '<input type="checkbox" class="sub_chk" data-id="'.$d->id.'">';
                })
                ->addColumn('style', function($d) {
                    return $d->style->nama;
                })
                ->addColumn('kategori', function($d) {
                    return $d->kategori->nama;
                })
                ->addColumn('aksi', function($d) {
                    return '<a data-toggle="modal" data-target="#edit" class="edit" data-attr="" data-id="'.$d->id.'">
                                <button class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></button>
                            </a>
                            <a data-toggle="modal" data-target="#hapus" class="hapus" data-attr="" data-id="'.$d->id.'">
                                <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </a>';
                })
                ->rawColumns(['aksi', 'icon', 'ids'])
                ->make(true);
        }

    }

    function delete_image(Request $request)
    {
        $data = Image::where('id',$request->id)->count();

        if ($data > 0) {
            $dd = Image::find($request->id);
            if(file_exists(public_path('upload/'.$dd->nama.'.svg'))){

                // unlink(public_path('upload/'.$dd->nama.'.svg'));
                Image::where('id',$request->id)->delete();

                return response()->json([
                    'error' => false,
                    'msg' => 'Data Berhasil dihapus'
                ]);
            }else{
                // return 'File does not exists.';
                Image::where('id',$request->id)->delete();

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
        Image::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Icon Deleted successfully."]);
    }

    function download_line()
    {
        $zip = new ZipArchive;
        $fileName = 'zipFileName.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
        	// Folder files to zip and download
        	// files folder must be existing to your public folder
            $data = Image::where('style_id', 1)->get()->pluck('filepath');

            $files = File::files(public_path('upload'));
   			// loop the files result
            foreach ($files as $key => $value) {
                foreach($data as $d) {
                    $relativeNameInZipFile = basename($d);
                    $zip->addFile($value, $relativeNameInZipFile);
                }
            }

            $zip->close();
        }
        $headers = array('Content-Type'=>'application/octet-stream',);
        $zip_new_name = "IconPack-Line.zip";

    	// Download the generated zip
        return response()->download(public_path($fileName), $zip_new_name, $headers)->deleteFileAfterSend(true);
    }

    function download_linecolor()
    {
        $zip = new ZipArchive;
        $fileName = 'zipFileName.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
        	// Folder files to zip and download
        	// files folder must be existing to your public folder
            $data = Image::where('style_id', 2)->get()->pluck('filepath');

            $files = File::files(public_path('upload'));
   			// loop the files result
            foreach ($files as $key => $value) {
                foreach($data as $d) {
                    $relativeNameInZipFile = basename($d);
                    $zip->addFile($value, $relativeNameInZipFile);
                }
            }

            $zip->close();
        }
        $headers = array('Content-Type'=>'application/octet-stream',);
        $zip_new_name = "IconPack-LineColor.zip";

    	// Download the generated zip
        return response()->download(public_path($fileName), $zip_new_name, $headers)->deleteFileAfterSend(true);
    }
    function download_solid()
    {
        $zip = new ZipArchive;
        $fileName = 'zipFileName.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
        	// Folder files to zip and download
        	// files folder must be existing to your public folder
            $data = Image::where('style_id', 3)->get()->pluck('filepath');

            $files = File::files(public_path('upload'));
   			// loop the files result
            foreach ($files as $key => $value) {
                foreach($data as $d) {
                    $relativeNameInZipFile = basename($d);
                    $zip->addFile($value, $relativeNameInZipFile);
                }
            }

            $zip->close();
        }
        $headers = array('Content-Type'=>'application/octet-stream',);
        $zip_new_name = "IconPack-Solid.zip";

    	// Download the generated zip
        return response()->download(public_path($fileName), $zip_new_name, $headers)->deleteFileAfterSend(true);
    }

    function download_solidcolor()
    {
        $zip = new ZipArchive;
        $fileName = 'zipFileName.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
        	// Folder files to zip and download
        	// files folder must be existing to your public folder
            $data = Image::where('style_id', 4)->get()->pluck('filepath');

            $files = File::files(public_path('upload'));
   			// loop the files result
            foreach ($files as $key => $value) {
                foreach($data as $d) {
                    $relativeNameInZipFile = basename($d);
                    $zip->addFile($value, $relativeNameInZipFile);
                }
            }

            $zip->close();
        }
        $headers = array('Content-Type'=>'application/octet-stream',);
        $zip_new_name = "IconPack-SolidColor.zip";

    	// Download the generated zip
        return response()->download(public_path($fileName), $zip_new_name, $headers)->deleteFileAfterSend(true);
    }

    function download_multi()
    {
        $zip = new ZipArchive;
        $fileName = 'zipFileName.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
        	// Folder files to zip and download
        	// files folder must be existing to your public folder
            $data = Image::where('style_id', 5)->get()->pluck('filepath');

            $files = File::files(public_path('upload'));
   			// loop the files result
            foreach ($files as $key => $value) {
                foreach($data as $d) {
                    $relativeNameInZipFile = basename($d);
                    $zip->addFile($value, $relativeNameInZipFile);
                }
            }

            $zip->close();
        }
        $headers = array('Content-Type'=>'application/octet-stream',);
        $zip_new_name = "IconPack-MultiColor.zip";

    	// Download the generated zip
        return response()->download(public_path($fileName), $zip_new_name, $headers)->deleteFileAfterSend(true);
    }
}
