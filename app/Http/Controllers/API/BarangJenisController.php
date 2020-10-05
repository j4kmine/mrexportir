<?php
 
 namespace App\Http\Controllers\API;
 
 use App\Models\BarangJenisModel;
 use Illuminate\Http\Request;
 use App\Http\Controllers\Controller;
 class BarangJenisController extends Controller
{
      /**
     * Handles Registration Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDataByBarangKategori(Request $request)
    {
   
        $this->validate($request, [
            'id_barang_kategori' => 'required'
           
        ]);

        $id_barang_kategori = $request->id_barang_kategori;

        $data = BarangJenisModel::where('id_barang_kategori', '=', $id_barang_kategori)->paginate(10);
        return response()->json([$data], 200);
    }

    public function select2(Request $request)
    {
   
        // $this->validate($request, [
        //     'id_barang_kategori' => 'required'
        // ]);

        $title = $request->input('q');

        $data = BarangJenisModel::select('id as id', 'title as text')  
                        ->where('title', 'like', '%' . $title . '%')
                        ->paginate(10);

        return response()->json([$data], 200);
    }

    public function getDataById(Request $request)
    {
   
        // $this->validate($request, [
        //     'title' => 'required'
           
        // ]);

        $id = $request->id;

        $data = BarangJenisModel::where('id', '=', $id)->paginate(10);
        return response()->json([$data], 200);
    }

    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'title'=>'required',
        //     'id_barang_kategori'=>'required'
        // ]);
        
        $barangjenis = new BarangJenisModel([
            'title' => $request->input('title'),
            'id_barang_kategori' => $request->input('id_barang_kategori'),
            'is_aktif' => $request->input('is_aktif'),
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $request->input('created_by')
        ]);
        $data = $barangjenis->save();
       
        if ($data) {
            return response()->json(['INSERT SUKSES'], 200);
        } else {
            return response()->json(['INSERT GAGAL'], 201);
        }
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'title'=>'required',
        //     'id_barang_kategori'=>'required',
        //     'is_aktif'=>'required'
        // ]);
        
        $update = [
                    'title' => $request->title, 
                    'id_barang_kategori' => $request->id_barang_kategori,
                    'is_aktif' => $request->is_aktif,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_by' => $request->updated_by
                ];
        $data = BarangJenisModel::where('id',$id)->update($update);
        if ($data) {
            return response()->json(['UPDATE SUKSES'], 200);
        } else {
            return response()->json(['UPDATE GAGAL'], 201);
        } 
    }

    public function destroy($id)
    {
        $data = BarangJenisModel::where('id',$id)->delete();
        if ($data) {
            return response()->json(['DELETE SUKSES'], 200);
        } else {
            return response()->json(['DELETE GAGAL'], 201);
        }
    }
}