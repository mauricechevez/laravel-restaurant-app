@extends('layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">New User</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/users/" class="breadcrumb-link">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">New User</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
     
            <div class="row">
                <!-- ============================================================== -->
                <!-- basic form -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Create New User</h5>
                        <div class="card-body">
                            <form action="#" id="basicform" data-parsley-validate="">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputfirstname">First Name</label>
                                        <input id="inputfirstname" type="text" name="firstname" data-parsley-trigger="change" required="" placeholder="John" autocomplete="off" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputlastname">Last Name</label>
                                        <input id="inputlastname" type="text" name="lastname" data-parsley-trigger="change" required="" placeholder="Doe" autocomplete="off" class="form-control">
                                    </div>     
                                </div>   
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputemailaddress">Email Address</label>
                                        <input id="inputemailaddress" type="email" name="email" data-parsley-trigger="change" required="" placeholder="johndoe@email.com" autocomplete="off" class="form-control">
                                    </div>     
                                    <div class="form-group col-md-6">
                                        <label for="inputpassword">Password</label>
                                        <input id="inputpassword" type="password" name="password" data-parsley-trigger="change" required="" placeholder="********" autocomplete="off" class="form-control">
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="inputrole">Select a Role</label>
                                        <select class="form-control" id="inputrole">
                                            <option value="employee">Employee</option>
                                            <option value="administrator">Administrator</option>
                                            
                                        </select>
                                    </div>        
                                </div>                       
                               
                                <div class="row">
                                    <div class="d-flex justify-content-end pr-2" style="width:100%">
                                            <button type="submit" class="btn btn-space btn-primary d-block">Submit</button>
                                            <button class="btn btn-space btn-secondary d-block">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form -->
                <!-- ============================================================== -->
            </div>
           
   
    </div>
   
</div>
@endsection

