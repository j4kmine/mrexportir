@extends('../../../templatefrontend', ['page' => $page])


@section('content')
<style>
 .login-box {
        margin-top: 50px;
        background: #FFFFFF;
        padding: 30px 35px;
        margin-bottom: 150px;
    }
    
    .btn-cek {
        font-weight: bold;
        padding: 5px 26px !important;
        font-size: 17px;
    }
    
    .forgot a {
        color: #C2262D;
    }
</style>
<section class="wrapper">
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Reset Password </h3>
                    <h4 class="text-center">Lupa Password akun ExportKu </h4>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-box">
                        <form method="post" action="{{ route('resetpassworduser') }}">
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password Baru" class="form-control" id="password" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" placeholder="Ulangi Password Baru" class="form-control" id="password" required="true">
                            </div>
                            <input type="hidden" name="code" value="{{ app('request')->input('code') }}"/>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-cek">Simpan</button>
                                </div>

                            </div>
                         

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection