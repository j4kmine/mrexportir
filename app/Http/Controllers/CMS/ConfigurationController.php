<?php
namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ConfigurationModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ConfigurationController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        //
        $configuration = ConfigurationModel::first();

        return view('cms.pages.configuration.index', compact('configuration'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'site_title'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required'
        ]);
         
        $configuration = new ConfigurationModel([
            'site_title' => $request->site_title
            ,'meta_title' => $request->meta_title
            ,'meta_description' => $request->meta_description
            ,'meta_keyword' => $request->meta_keyword
            ,'alamat' => $request->address
            ,'hp' => $request->hp
            ,'fax' => $request->fax
            ,'email' => $request->email
            ,'fb' => $request->facebook
            ,'nophone' => $request->phone
            ,'twitter' => $request->twitter
            ,'instagram' => $request->instagram
        ]);
        $data = $configuration->save();
        return redirect('/configuration')->with('success', 'Success Input Data');
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'site_title'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required'
        ]);
         
        $update = [
        'site_title' => $request->site_title
        ,'meta_title' => $request->meta_title
        ,'meta_description' => $request->meta_description
        ,'meta_keyword' => $request->meta_keyword
        ,'alamat' => $request->address
        ,'hp' => $request->hp
        ,'fax' => $request->fax
        ,'email' => $request->email
        ,'fb' => $request->facebook
        ,'nophone' => $request->phone
        ,'twitter' => $request->twitter
        ,'instagram' => $request->instagram
        ];
        ConfigurationModel::where('id',$id)->update($update);
        return redirect('/configuration')->with('success', 'Success Update Data');
    }
}