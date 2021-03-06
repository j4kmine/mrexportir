<?php


namespace App\Http\Controllers\CMS;

use Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FobModel;

class FobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {


        $fob = FobModel::paginate(10);

        return view('cms.pages.fob.index', compact('fob'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.fob.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tipe_fob' => 'required'
        ]);

        $fob = new FobModel([
            'tipe_fob' => $request->get('tipe_fob'),
            'barang_umum' => $request->get('barang_umum'),
            'agriculture' => $request->get('agriculture'),
            'hewan_hidup' => $request->get('hewan_hidup'),
            'barang_mudah_terbakar' => $request->get('barang_mudah_terbakar'),
            'storage' => $request->get('storage'),
            'storage_agriculture' => $request->get('storage_agriculture'),
            'storage_hewan_hidup' => $request->get('storage_hewan_hidup'),
            'storage_barang_mudah_terbakar' => $request->get('storage_barang_mudah_terbakar'),
            'freaight_agriculture' => $request->get('freaight_agriculture'),
            'freaight_hewan_hidup' => $request->get('freaight_hewan_hidup'),
            'freaight_barang_mudah_terbakar' => $request->get('freaight_barang_mudah_terbakar'),
            'freaight' => $request->get('freaight'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
        $data = $fob->save();

        return redirect('/fob/create')->with('success', 'Success Input Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $where = array('id' => $id);
        $data['fob'] = FobModel::where($where)->first();


        return view('cms.pages.fob.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tipe_fob' => 'required'
        ]);


        $update = [
            'tipe_fob' => $request->tipe_fob,
            'barang_umum' => $request->barang_umum,
            'agriculture' => $request->agriculture,
            'hewan_hidup' => $request->hewan_hidup,
            'barang_mudah_terbakar' => $request->barang_mudah_terbakar,
            'storage' => $request->storage,
            'storage_agriculture' => $request->storage_agriculture,
            'storage_hewan_hidup' => $request->storage_hewan_hidup,
            'storage_barang_mudah_terbakar' => $request->storage_barang_mudah_terbakar,
            'freaight_agriculture' => $request->freaight_agriculture,
            'freaight_hewan_hidup' => $request->freaight_hewan_hidup,
            'freaight_barang_mudah_terbakar' => $request->freaight_barang_mudah_terbakar,
            'freaight' => $request->freaight,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        FobModel::where('id', $id)->update($update);
        return redirect('/fob/' . $id . '/edit')->with('success', 'Success Input Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        FobModel::where('id', $id)->delete();
        return redirect('/fob')->with('success', 'Deleted Successfully');
    }
    public function hapus($id)
    {

        FobModel::where('id', $id)->delete();
        return redirect('/fob')->with('success', 'Deleted Successfully');
    }
    public function postProcess(Request $request)
    {
        $postvalue =  $request->datacek;

        if ($postvalue != '') {
            foreach ($postvalue as $data) {
                FobModel::where('id', $data)->delete();
            }
            echo "success";
        } else {
            echo "failed";
        }
    }
}
