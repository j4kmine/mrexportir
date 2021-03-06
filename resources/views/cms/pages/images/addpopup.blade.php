@extends('../../../templatepopup')

@section('content')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
              </div>
            @endif
            <div class="container-fluid">
                <div class="row my-3">
                    <div class="col-md-12">
                        <form method="post" action="{{ route('image.addimagepopuppost') }}" enctype="multipart/form-data">
                            <div class="card no-b">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="card-title">Add Images</h5>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a class="btn btn-primary btn-sm " href="{{url('imagepopup')}}">List Images</a>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group m-0">
                                                <label for="title" class="col-form-label s-12">Title</label>
                                                <input id="title" placeholder="Enter images title" name="title" value=" {{ old('title') }} " class="form-control r-0 light s-12 " type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group m-0">
                                                <label for="name" class="col-form-label s-12">Description</label>
                                                <textarea rows="5" class="form-control r-0 light s-12" id="description" placeholder="Enter Meta description " name="description" >
                                                    {{ old('description') }} 
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group m-0">
                                                <input type="file" name="image" id="uploadImage"  class="form-control r-0 light s-12">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Save Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection