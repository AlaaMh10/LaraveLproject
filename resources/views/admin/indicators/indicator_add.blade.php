@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #b70000;
            font-weight: 700px;
        }
    </style>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Add Indicator Page </h4>

                            <form method="post" action="{{ route('store.indicator') }}" enctype="multipart/form-data">
                                @csrf



                              

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Indicator Title </label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control" type="text" id="example-text-input" required>


                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Indicator Tags </label>
                                    <div class="col-sm-10">
                                        <input name="tags" value="home,tech" class="form-control" type="text" data-role="tagsinput" required>
                                    </div>
                                </div>
                                <!-- end row -->



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Indicator Description
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea class="txt" width="300px" name="description" required></textarea>
                                    </div>
                                </div>


                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Price </label>
                            <div class="col-sm-10">
                                <input name="price" class="form-control" type="number" id="example-text-input" required>


                            </div>

                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Indicator Image </label>
                                <div class="col-sm-10">
                                    <input name="image" class="form-control" type="file" id="image" required>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">MT4_free Indicator </label>
                                <div class="col-sm-10">
                                    <input name="MT4_free" class="form-control" type="file" id="mt" required> 
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">MT5_free Indicator  </label>
                                <div class="col-sm-10">
                                    <input name="MT5_free" class="form-control" type="file" id="mt" required>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">MT4_pro Indicator  </label>
                                <div class="col-sm-10">
                                    <input name="MT4_pro" class="form-control" type="file" id="mt" required>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">MT5_pro Indicator  </label>
                                <div class="col-sm-10">
                                    <input name="MT5_pro" class="form-control" type="file" id="mt" required>
                                </div>
                            </div>
                            <!-- end row -->




                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}"
                                        alt="Card image cap">
                                </div>
                            </div>
                            <!-- end row -->
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert">
                            </form>



                        </div>
                    </div>
                </div> <!-- end col -->
            </div>



        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script type="text/javascript"></script>
@endsection
