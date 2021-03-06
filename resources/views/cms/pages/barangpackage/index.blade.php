@extends('../../../templatecms')


@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="container">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <form action="" method="GET">
                                <div class="container">
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <br/>
                                            <div class="form-group input-group-sm has-right-icon focused">
                                                <input class="form-control form-control-sm light r-30" placeholder="Title" name="search" value="{{ app('request')->input('search') }}" type="text">
                                                <i class="icon-search"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-9 text-right">
                                            <div class="mt-3">
                                                <a  href="{{ route('barangpackage.create') }}" class="btn btn-success btn-sm"><i class="icon-plus mr-2"></i> Add Data</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </form>
                        </div>
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form id="tabellistdata" action="{{url()->current()}}/postProcess">
                                <table   class="table table-striped table-hover r-0">
                                        <thead>
                                        <tr class="no-b">
                                            <th style="width: 30px">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="checkedAll" class="custom-control-input"><label
                                                        class="custom-control-label" for="checkedAll"></label>
                                                </div>
                                            </th>
                                            <th>TITLE</th>
                                            <th>STATUS</th>
                                           
                                            <th></th>
                                        </tr>
                                        </thead>   
                                        <tbody>
                                            @foreach($barangpackage as $p)
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                             <input type="checkbox" name="datacek[]" class="custom-control-input checkSingle" value="{{$p->id}}" id="{{$p->id}}" required=""><label class="custom-control-label" for="{{$p->id}}"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div>
                                                                <div>
                                                                    <strong>{{ $p->title }}</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> 
                                                        <div class="d-none d-lg-block">
                                                            @if($p->is_aktif == 1)
                                                                AKTIF
                                                            @else
                                                                TIDAK AKTIF
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('barangpackage/hapus',$p->id) }}"><i class="icon-trash-can"></i></a>
                                                        <a href="{{ route('barangpackage.edit', $p->id)}}"><i class="icon-pencil"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="card-body">
                                <button  class="btn btn-danger btn-lg" onclick="submitkie()"><i class="icon-trash mr-2"></i> Delete Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="my-3" aria-label="Page navigation">
                     {{ $barangpackage->links() }}
                </nav>
                
            </div>
     
        </div>
        
    </div>
    <script>
        function submitkie(){
         
            var cek = $('#tabellistdata').serialize();
            if (cek == "") {
                toastr.error('Error.', 'Error delete data')
            }else{
              
                jQuery.ajax({
                        type: 'POST',
                        url: jQuery('#tabellistdata').attr('action'),
                        data: jQuery('#tabellistdata').serialize(),
                        success: function(response) {
                            if(response == 'success'){
                                toastr.success('Success', 'Success Delete Data')
                                location.reload();
                            }else{
                                toastr.error('Error.', 'Error delete data')
                                location.reload();
                            }
                        }
                    })
            };
            return false;
            
        }
    </script>
@endsection