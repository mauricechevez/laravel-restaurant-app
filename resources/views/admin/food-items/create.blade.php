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
                    <h2 class="pageheader-title">New Food Food Item</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/food-items/" class="breadcrumb-link">Food Items</a></li>
                                <li class="breadcrumb-item active" aria-current="page">New Food Food Item</li>
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
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Create New Food Food Item</h5>
                        <div class="card-body">
                            <form action="#" id="basicform" data-parsley-validate="">
                                <div class="form-group">
                                    <label for="inputFoodItemTitle">Food Item Title</label>
                                    <input id="inputFoodItemTitle" type="text" name="title" data-parsley-trigger="change" required="" placeholder="Enter a New Food Item" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputFoodItemImage">Food Item Image URL</label>
                                    <input id="inputFoodItemImage" type="text" name="image_url" data-parsley-trigger="change" required="" placeholder="http://exampleimagehost.com/x8jt6/sample.jpg" autocomplete="off" class="form-control">
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

