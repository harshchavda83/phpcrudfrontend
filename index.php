<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link href="
        https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/css/jquery.dataTables.min.css
        " rel="stylesheet">
    <link href="
        https://cdn.jsdelivr.net/npm/datatables.net-bs4@2.1.6/css/dataTables.bootstrap4.min.css
        " rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

    <div class="container">
        <h3 class="mt-3 mb-3">User Crud Application</h3>
        <div id="btn-main">
            <button type="button" onclick="view_add_form()" class="btn btn-secondary btn-block">Add New
                User</button>
        </div>




        <!-- form panel -->

        <div class="main-form" id="main-form">
            <form id="validate_form" method="post" enctype="multipart/form-data" action="">

                <div class="row mt-3 mb-3">


                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control mb-3" id="txt_fname" name="txt_fname"
                            placeholder="First Name">
                        <input type="hidden" id="txt_for" name="txt_for">
                        <input type="hidden" id="txt_order_id" name="txt_order_id">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control mb-3" id="txt_lname" name="txt_lname"
                            placeholder="Last Name">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control mb-3" id="txt_email" name="txt_email"
                            placeholder="Email Address">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="number" class="form-control mb-3" id="txt_contact" name="txt_contact"
                            placeholder="Contact Number">
                    </div>


                </div>

                <div id="submit_div">
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                </div>

            </form>
        </div>

        <!-- end form panel -->



        <!-- table start -->

        <div class="main-table mt-5">

            <h3>User Details</h3>

            <div class="table-responsive m-t-40">
                <table id="datatable23" class="table text-white" cellspacing="1" width="100%"></table>
            </div>

        </div>

        <!-- table end -->
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validation-unobtrusive/3.2.12/jquery.validate.unobtrusive.min.js">
    </script>
    <script src="
        https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/js/jquery.dataTables.min.js
        "></script>
    <script src="
        https://cdn.jsdelivr.net/npm/datatables.net-bs4@2.1.6/js/dataTables.bootstrap4.min.js
        "></script>



    <!-- *************************************************************************** -->


    <!-- JAVASCRIPT CODE -->

    <script>
    function view_add_form() {

        $("#main-form").show();
        $("#txt_for").val("INSERT");

        let contentdata = "";
        contentdata +=
            '<button type="button" onclick="hide_form()" class="btn btn-warning btn-block">Hide Form</button>';
        contentdata += '<br>';

        $("#btn-main").html(contentdata);

    }



    function hide_form() {

        $("#main-form").hide(); // Hide the entire form

        let contentdata = "";
        contentdata +=
            '<button type="button" onclick="view_add_form()" class="btn btn-info btn-block">Add Form</button>';
        contentdata += '<br>';

        $("#btn-main").html(contentdata);

    }




    function view_edit_form() {

        $("#main-form").show();
        $("#txt_for").val("EDIT");

        let contentdata = "";
        contentdata +=
            '<button type="button" onclick="hide_form()" class="btn btn-warning btn-block">Hide Form</button>';
        contentdata += '<br>';

        $("#btn-main").html(contentdata);


        let contentdata2 = '<button type="submit" name="submit" class="btn btn-secondary">Edit User</button>';
        $("#submit_div").html(contentdata2);

    }
    </script>












    <!-- *************************************************************************** -->


    <!-- JQUERY VALIDATION & OTHER -->

    <script>
    $(document).ready(function() {

        $("#main-form").hide();

        $("#validate_form").validate({
            rules: {
                txt_fname: {
                    required: true
                },
                txt_lname: {
                    required: true
                },
                txt_email: {
                    required: true,
                    email: true
                },
                txt_contact: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                }

            },
            messages: {

                txt_fname: "First Name Is Required",
                txt_lname: "Last Name Is Required",
                txt_email: {
                    required: "Email Address Is Required",
                    email: "Enter Valid Email"
                },
                txt_contact: {
                    required: "Contact Number Is Required",
                }

            },

            submitHandler: function(form) {



            }
        })

    })
    </script>

</body>

</html>