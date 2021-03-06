<?php


namespace App\Http\Controllers\CMS;
use Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TrackingModel;
use App\Models\OrderModel;
use App\Mail\TrackingEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\UserModel;
class TrackingController extends Controller
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
        $search = $request->input('search');
       
        $tracking = TrackingModel::where('id', 'LIKE', '%' . $search . '%')
                     ->paginate(10);

        return view('cms.pages.tracking.index', compact('tracking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('cms.pages.tracking.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_order'=>'required',
            'keterangan'=>'required',
            'flag'=>'required',
            'status'=>'required'
        ]);

        $get = OrderModel::select('id_user')
        ->where('id', '=', $request->input('id_order'))
        ->first();
        $id_user = 0;
        foreach($get as $value) {
            $id_user = $value->id_user;
        }
        $tracking = new TrackingModel([
            'id_order' => $request->get('id_order'),
            'id_user' => $id_user,
            'keterangan' => $request->get('keterangan'),
            'flag' => $request->get('flag'),
            'status' => $request->get('status'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
        $data = $tracking->save();
        if ($data) {
            $data_email['tracking'] = [
                'id_order' => $request->get('id_order'),
                'id_user' => $id_user,
                'keterangan' => $request->get('keterangan'),
                'flag' => $request->get('flag'),
                'status' => $request->get('status'),
                'created_at' => date('Y-m-d H:i:s')
            ];
            ## get detail order
            $where = array('id' => $data_email['tracking']['id_order']);
            $data_email['order'] = OrderModel::where($where)->first();
            // echo "<pre>";var_dump($data_email['order']->pengirim_email);exit();

            Mail::to($data_email['order']->pengirim_email)->send(new TrackingEmail($data_email));
            // Mail::to("faturrachmandonny@gmail.com")->send(new TrackingEmail($data_email));
        }
        return redirect('/tracking/create')->with('success', 'Success Input Data');
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
        $data['tracking'] = TrackingModel::where($where)->first();
        if($data['tracking']->id_order != 0){
                $where = array('id' => $data['tracking']->id_order);
                $data['tracking']->order = OrderModel::where($where)->first();
        }
        if($data['tracking']->order->id_user != 0){
            $where = array('id' => $data['tracking']->order->id_user );
            $data['tracking']->user = UserModel::where($where)->first();
        }
   
        return view('cms.pages.tracking.edit', $data);
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
        $this->validate($request,[
            'id_order'=>'required',
            'keterangan'=>'required',
            'flag'=>'required',
            'status'=>'required'
        ]);
         
        $get = OrderModel::select('id_user')
        ->where('id', '=', $request->id_order)
        ->get();

        $id_user = 0;
        foreach($get as $value) {
            $id_user = $value->id_user;
        }
            
        $update = [
                    'id_order' => $request->id_order, 
                    'id_user' => $id_user, 
                    'keterangan' => $request->keterangan,
                    'flag' => $request->flag,
                    'status' => $request->status,
                    'updated_at' => date('Y-m-d H:i:s')
                ];
        $data = TrackingModel::where('id',$id)->update($update);
        if ($data) {
            $data_email['tracking'] = [
                'id_order' => $request->id_order, 
                'id_user' => $id_user, 
                'keterangan' => $request->keterangan,
                'flag' => $request->flag,
                'status' => $request->status,
                'updated_at' => date('Y-m-d H:i:s')
            ];
            ## get detail order
            $where = array('id' => $data_email['tracking']['id_order']);
            $data_email['order'] = OrderModel::where($where)->first();
            // echo "<pre>";var_dump($data_email['order']->pengirim_email);exit();

            Mail::to($data_email['order']->pengirim_email)->send(new TrackingEmail($data_email));
            // Mail::to("faturrachmandonny@gmail.com")->send(new TrackingEmail($data_email));
        }
        return redirect('/tracking/'.$id.'/edit')->with('success', 'Success Input Data');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        TrackingModel::where('id',$id)->delete();
        return redirect('/tracking')->with('success', 'Deleted Successfully');
    }
    public function hapus($id)
    {
       
        TrackingModel::where('id',$id)->delete();
        return redirect('/tracking')->with('success', 'Deleted Successfully');
    }
    public function postProcess(Request $request){
        $postvalue =  $request->datacek;
 
		if($postvalue != ''){
			foreach($postvalue as $data){
                TrackingModel::where('id',$data)->delete();
			}
            echo "success";
		}else{
            echo "failed";
        }
	}
}