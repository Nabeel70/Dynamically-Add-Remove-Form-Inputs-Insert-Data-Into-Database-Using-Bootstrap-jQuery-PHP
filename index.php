<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/svg-with-js.min.css">
      <title>Builtin-form</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Add Items</h4>
                    </div>

                    <div class="card-body p-4">
                        <div id="show_alert"></div>
                        <form action="#" method="POST" id="add_form">

                        <div class="row">
                <div class="col-md-2">
                  <h5>Packing Khata</h5>
                </div>
              
                <div class="col-md-2">
                  <select name="product_khata" class="form-select form-control" aria-label="Default select example">
                    <option value="">Khata#</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                
                <div class="col-md-2">
                  <h5>Quality</h5>
                </div>
                
                <div class="col-md-2">
                    <select name="product_quality" class="form-select form-control" aria-label="Default select example">
                        <option value="">Quality</option>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="bad">Bad</option>
                      </select>
                </div>
              </div>
                     <table>
                        <tbody>
                            <tr>
                            <div id="show_item">
                                <div class="row">
                                    <div class="col mb-3">
                                         <input type="number" name="product_bill[]" class="form-control"
                                          placeholder="Bill#" required>
                                    </div>

                                    <div class="col mb-3">
                                    
                                        <select name="product_customer[]" class="form-select form-control" aria-label="Default select example">
                                        <option value="">Customer</option>
                                        <option value="joy">Joy</option>
                                        <option value="zain">Zain</option>
                                        <option value="alex">Alex</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col mb-3">
                                         <input type="number" name="product_lot[]" class="form-control"
                                          placeholder="Lot Number" required>
                                    </div>

   
                                    <div class="col mb-3">
                                         <input type="number" name="product_thaan[]" class="form-control"
                                          placeholder="Thaan" required>
                                    </div>

                                    <div class="col mb-3">
                                         <input type="number" name="product_qty[]" class="form-control"
                                          placeholder="Quantity" required>
                                    </div>

                                    <div class="col mb-3 d-grid">
                                        <button class="btn btn-success add_item_btn">Add More</button>
                                    </div>
                                </div>
                            </div>
                            </tr>
                        </tbody>
                     </table>
                            <input type="submit" value="Add" class="btn btn-primary w-25" id="add_btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".add_item_btn").click(function(e){
                e.preventDefault();
                $("#show_item").prepend(`<div class="row append_item">
                                    <div class="col mb-3">
                                         <input type="number" name="product_bill[]" class="form-control"
                                          placeholder="Bill#" required>
                                    </div>

                                    <div class="col mb-3">
                                    
                                        <select name="product_customer[]" class="form-select form-control" aria-label="Default select example">
                                        <option value="">Customer</option>
                                        <option value="joy">Joy</option>
                                        <option value="zain">Zain</option>
                                        <option value="alex">Alex</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col mb-3">
                                         <input type="number" name="product_lot[]" class="form-control"
                                          placeholder="Lot Number" required>
                                    </div>

   
                                    <div class="col mb-3">
                                         <input type="number" name="product_thaan[]" class="form-control"
                                          placeholder="Thaan" required>
                                    </div>

                                    <div class="col mb-3">
                                         <input type="number" name="product_qty[]" class="form-control"
                                          placeholder="Quantity" required>
                                    </div
                                </div>

                                    <div class="col-md-2 mb-3 d-grid">
                                        <button class="btn btn-danger remove_item_btn">Remove</button>
                                    </div>
                                </div>`);
            });
            $(document).on('click', '.remove_item_btn', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
            //ajax request to insert all form data
            $("#add_form").submit(function(e) {
                e.preventDefault();
                $("add_btn").val('Adding...');
                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                     $("#add_btn").val('Add');
                     $("#add_form")[0].reset();
                     $(".append_item").remove();
                     $("#show_alert").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                    }
                })
            })
        });
    </script>
</body>
</html>