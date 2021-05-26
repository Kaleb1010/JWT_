<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <link href=https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css rel="stylesheet">
    <link href=//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css rel="stylesheet">

    <title></title>
</head>
<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div class="main-wrapper">

    <div class="page-wrapper">


        <div class="container-fluid mt--6">

            <div class="row">
                <div class="col-xl order-xl-2">
                    <div class="card shadow" style="border-radius: 20px">
                        <div class="card-body">
                            <div class="table-responsive" style="font-size: small">
                                <table id="example" class="table table-striped no-wrap">
                                    <thead>
                                    <tr>

                                        <th></th>
                                        <th></th>
                                        <th>First name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all as $user)
                                        <tr class="">
                                            <td>
                                                <button class="btn btn-success shadow"
                                                        style="border-radius: 5px"
                                                        data-toggle="modal"
                                                        data-target="#procurement"

                                                    <span class="fa fa-eye"></span> view
                                                </button>
                                            </td>

                                            <td>
                                                <button class="btn btn-info shadow complete alert-complete-success "  style="border-radius: 5px"
                                                        data-toggle="modal"
                                                        data-target="#procurement_edit"

                                                    <span class="fa fa-clipboard-check" style="color: white"></span>
                                                    Edit
                                                </button>
                                            </td>

                                            <td>{{$user->f_name}}</td>
                                            <td>{{$user->l_name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role}}</td>


</tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
{{--                    <div class="modal fade" id="procurement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >--}}
{{--                        <div class="modal-dialog modal-dialog-centered modal-full-width" role="document">--}}
{{--                            <div class="modal-content" style="border-radius: 10px;" >--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel"> procurement View</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-4 order-xl-1">--}}
{{--                                            <div class="card" style="   border-radius: 20px 20px 0 0;">--}}
{{--                                                --}}{{--   procurement form --}}

{{--                                                <div class="card-body">--}}

{{--                                                    <div class="pl-lg-1">--}}

{{--                                                        <h6 class="heading-small text-muted mb-1">Procurement Team</h6>--}}
{{--                                                        <hr class="my-2 mb-4" />--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label " for="project_name1" ><strong>Project Name:</strong></label>--}}
{{--                                                                    <input disabled required type="text"name="project_name1" id="project_name1" class="form-control" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label" for="quantity1"><strong>Quantity:</strong></label>--}}
{{--                                                                    <input disabled required type="text" name="quantity1" id="quantity1" class="form-control" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label " for="item_description1" ><strong>Item Description:</strong></label>--}}
{{--                                                                    <textarea disabled required type="text" name="item_description1" id="item_description1" class="form-control" style="border-radius: 7px"></textarea>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label " for="supplier_name1" ><strong>Supplier Name:</strong></label>--}}
{{--                                                                    <input disabled type="text" name="supplier_name1" id="supplier_name1" class="form-control" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label for="product_status" class=" form-control-label">Status</label>--}}
{{--                                                                    <!--                                                    <input type="text" id="postal-code" placeholder="Postal Code" class="form-control"></div>-->--}}
{{--                                                                    <select disabled name="product_status1" id="product_status1" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        <option value="pending">Pending</option>--}}
{{--                                                                        <option value="ordered">Order Made</option>--}}
{{--                                                                    </select>--}}
{{--                                                                    <span class="text-danger">@error('product_status') {{$message}} @enderror</span>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label " for="in_charge1" ><strong>Personnel In-charge:</strong></label>--}}
{{--                                                                    <input disabled  required type="text" name="in_charge1" id="in_charge1" class="form-control" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label" for="deadline1"><strong>Deadline/Priority:</strong></label>--}}
{{--                                                                    <input disabled required type="date" name="deadline1" id="deadline1" class="form-control" placeholder="dd/mm/yyyy" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label" for="exp_delivery_loc1"><strong>Expected Delivery Location:</strong></label>--}}
{{--                                                                    <input disabled required type="text" name="exp_delivery_loc1" id="exp_delivery_loc1" class="form-control" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}


{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                            <div class="results">--}}
{{--                                                @if(\Illuminate\Support\Facades\Session::get('warning'))--}}
{{--                                                    <div class="alert alert-warning_change">--}}
{{--                                                        <script>--}}
{{--                                                            swal("Nope! You are not authorized to access this page!", {--}}
{{--                                                                icon: "warning",--}}
{{--                                                            });--}}
{{--                                                        </script>--}}
{{--                                                    </div>--}}
{{--                                                @endif--}}
{{--                                                @if(\Illuminate\Support\Facades\Session::get('success'))--}}
{{--                                                    <div class="alert alert-warning_change">--}}
{{--                                                        <script>--}}
{{--                                                            swal("Great! procurement added!", {--}}
{{--                                                                icon: "success",--}}
{{--                                                            });--}}
{{--                                                        </script>--}}
{{--                                                    </div>--}}
{{--                                                @endif--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <div class="col-xl-4 order-xl-1">--}}
{{--                                            <div class="card" style="   border-radius: 20px 20px 0 0;">--}}
{{--                                                --}}{{--   procurement form --}}
{{--                                                <div class="card-body">--}}

{{--                                                    <div class="pl-lg-1">--}}

{{--                                                        <h6 class="heading-small text-muted mb-1 mt-2" style="color: black">Editable by (Personnel In-charge)</h6>--}}
{{--                                                        <hr class="my-2 mb-4" />--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label " for="procurement_date1" ><strong>Procurement Date:</strong></label>--}}
{{--                                                                    <input disabled type="date" name="procurement_date1" id="procurement_date1"  placeholder="dd/mm/yyyy" class="form-control" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label" for="expected_ready1"><strong>Expected Readiness:</strong></label>--}}
{{--                                                                    <input disabled type="date" name="expected_ready1" id="expected_ready1" placeholder="dd/mm/yyyy" class="form-control" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}


{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                            @if(\Illuminate\Support\Facades\Session::get('warning'))--}}
{{--                                                <div class="alert alert-warning_change">--}}
{{--                                                    <script>--}}
{{--                                                        swal("Nope! You are not authorized to access this page!", {--}}
{{--                                                            icon: "warning",--}}
{{--                                                        });--}}
{{--                                                    </script>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-4 order-xl-1">--}}
{{--                                            <div class="card" style="   border-radius: 20px 20px 0 0;">--}}
{{--                                                --}}{{--   procurement form --}}
{{--                                                <div class="card-body">--}}

{{--                                                    <div class="pl-lg-1">--}}
{{--                                                        <h6 class="heading-small text-muted mb-1 mt-2" style="color: black">Editable by (Delivery Personnel)</h6>--}}
{{--                                                        <hr class="my-2 mb-4" />--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label " for="delivery_means1" ><strong>Means of Delivery?</strong></label>--}}
{{--                                                                    <input disabled type="text" name="delivery_means1" id="delivery_means1" class="form-control" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label" for="delivery_date1"><strong>Delivery Date:</strong></label>--}}
{{--                                                                    <input disabled type="date" name="delivery_date1" id="delivery_date1" placeholder="dd/mm/yyyy" class="form-control" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg">--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <label class="form-control-label " for="cur_delivery_loc1" ><strong>Delivery To:</strong></label>--}}
{{--                                                                    <input disabled  type="text" name="cur_delivery_loc1" id="cur_delivery_loc1" class="form-control" style="border-radius: 7px">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}


{{--                                                </div>--}}

{{--                                            </div>--}}

{{--                                            @if(\Illuminate\Support\Facades\Session::get('warning'))--}}
{{--                                                <div class="alert alert-warning_change">--}}
{{--                                                    <script>--}}
{{--                                                        swal("Nope! You are not authorized to access this page!", {--}}
{{--                                                            icon: "warning",--}}
{{--                                                        });--}}
{{--                                                    </script>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-footer"></div>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    --}}{{--                            edit modal--}}
{{--                    <div class="modal fade" id="procurement_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >--}}
{{--                        <div class="modal-dialog modal-dialog-centered modal-full-width" role="document">--}}
{{--                            <div class="modal-content" style="border-radius: 10px;" >--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel"> procurement Edit</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <form action="{{route("procure_edit")}}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    <div class="modal-body">--}}
{{--                                        @if($employee->department == 'procurement')--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-xl-4 order-xl-1">--}}
{{--                                                    <div class="card" style="   border-radius: 20px 20px 0 0;">--}}
{{--                                                        --}}{{--   procurement edit form --}}

{{--                                                        <div class="card-body">--}}

{{--                                                            <div class="pl-lg-1">--}}

{{--                                                                <h6 class="heading-small text-muted mb-1">Procurement Team</h6>--}}
{{--                                                                <hr class="my-2 mb-4" />--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <input type="hidden" id="edited" name="edited">--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="project_name2" ><strong>Project Name:</strong></label>--}}
{{--                                                                            <select  name="project_name2" id="project_name2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                                <option></option>--}}
{{--                                                                                @foreach($sales as $company_name)--}}
{{--                                                                                    <option value="{{$company_name->company_name}}">{{$company_name->company_name}}</option>--}}
{{--                                                                                @endforeach--}}
{{--                                                                            </select>--}}
{{--                                                                            <span class="text-danger">@error('project_name2') {{$message}} @enderror</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label" for="quantity2"><strong>Quantity:</strong></label>--}}
{{--                                                                            <input  required type="text" name="quantity2" id="quantity2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="item_description2" ><strong>Item Description:</strong></label>--}}
{{--                                                                            <textarea  required type="text" name="item_description2" id="item_description2" class="form-control" style="border-radius: 7px"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="supplier_name2" ><strong>Supplier Name:</strong></label>--}}
{{--                                                                            <input  type="text" name="supplier_name2" id="supplier_name2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label for="product_status" class=" form-control-label">Status</label>--}}
{{--                                                                            <!--                                                    <input type="text" id="postal-code" placeholder="Postal Code" class="form-control"></div>-->--}}
{{--                                                                            <select  name="product_status2" id="product_status2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                                <option value="pending">Pending</option>--}}
{{--                                                                                <option value="ordered">Order Made</option>--}}
{{--                                                                            </select>--}}
{{--                                                                            <span class="text-danger">@error('product_status2') {{$message}} @enderror</span>--}}

{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="in_charge2" ><strong>Personnel In-charge:</strong></label>--}}
{{--                                                                            <input   required type="text" name="in_charge2" id="in_charge2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label" for="deadline2"><strong>Deadline/Priority:</strong></label>--}}
{{--                                                                            <input  required type="date" name="deadline2" id="deadline2" class="form-control" placeholder="dd/mm/yyyy" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label" for="exp_delivery_loc2"><strong>Expected Delivery Location:</strong></label>--}}
{{--                                                                            <input  required type="text" name="exp_delivery_loc2" id="exp_delivery_loc2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                            </div>--}}


{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    <div class="results">--}}
{{--                                                        @if(\Illuminate\Support\Facades\Session::get('warning'))--}}
{{--                                                            <div class="alert alert-warning_change">--}}
{{--                                                                <script>--}}
{{--                                                                    swal("Nope! You are not authorized to access this page!", {--}}
{{--                                                                        icon: "warning",--}}
{{--                                                                    });--}}
{{--                                                                </script>--}}
{{--                                                            </div>--}}
{{--                                                        @endif--}}
{{--                                                        @if(\Illuminate\Support\Facades\Session::get('success'))--}}
{{--                                                            <div class="alert alert-warning_change">--}}
{{--                                                                <script>--}}
{{--                                                                    swal("Great! procurement added!", {--}}
{{--                                                                        icon: "success",--}}
{{--                                                                    });--}}
{{--                                                                </script>--}}
{{--                                                            </div>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                                <div class="col-xl-4 order-xl-1">--}}
{{--                                                    <div class="card" style="   border-radius: 20px 20px 0 0;">--}}
{{--                                                        --}}{{--   procurement form --}}
{{--                                                        <div class="card-body">--}}
{{--                                                            <div class="pl-lg-1">--}}
{{--                                                                <h6 class="heading-small text-muted mb-1 mt-2" style="color: black">Editable by (Personnel In-charge)</h6>--}}
{{--                                                                <hr class="my-2 mb-4" />--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="procurement_date2" ><strong>Procurement Date:</strong></label>--}}
{{--                                                                            <input  type="date" name="procurement_date2" id="procurement_date2"  placeholder="dd/mm/yyyy" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label" for="expected_ready2"><strong>Expected Readiness:</strong></label>--}}
{{--                                                                            <input type="date" name="expected_ready2" id="expected_ready2" placeholder="dd/mm/yyyy" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    @if(\Illuminate\Support\Facades\Session::get('warning'))--}}
{{--                                                        <div class="alert alert-warning_change">--}}
{{--                                                            <script>--}}
{{--                                                                swal("Nope! You are not authorized to access this page!", {--}}
{{--                                                                    icon: "warning",--}}
{{--                                                                });--}}
{{--                                                            </script>--}}
{{--                                                        </div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xl-4 order-xl-1">--}}
{{--                                                    <div class="card" style="   border-radius: 20px 20px 0 0;">--}}
{{--                                                        --}}{{--   procurement form --}}
{{--                                                        <div class="card-body">--}}
{{--                                                            <div class="pl-lg-1">--}}
{{--                                                                <h6 class="heading-small text-muted mb-1 mt-2" style="color: black">Editable by (Delivery Personnel)</h6>--}}
{{--                                                                <hr class="my-2 mb-4" />--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="delivery_means2" ><strong>Means of Delivery?</strong></label>--}}
{{--                                                                            <input  type="text" name="delivery_means2" id="delivery_means2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label" for="delivery_date2"><strong>Delivery Date:</strong></label>--}}
{{--                                                                            <input  type="date" name="delivery_date2" id="delivery_date2" placeholder="dd/mm/yyyy" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="cur_delivery_loc2" ><strong>Delivery To:</strong></label>--}}
{{--                                                                            <input  type="text" name="cur_delivery_loc2" id="cur_delivery_loc2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                            </div>--}}


{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    @if(\Illuminate\Support\Facades\Session::get('warning'))--}}
{{--                                                        <div class="alert alert-warning_change">--}}
{{--                                                            <script>--}}
{{--                                                                swal("Nope! You are not authorized to access this page!", {--}}
{{--                                                                    icon: "warning",--}}
{{--                                                                });--}}
{{--                                                            </script>--}}
{{--                                                        </div>--}}
{{--                                                    @endif--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                        this is if user department is not equals to procurement--}}
{{--                                        @else--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-xl-4 order-xl-1">--}}
{{--                                                    <div class="card" style="   border-radius: 20px 20px 0 0;">--}}
{{--                                                        --}}{{--   procurement edit form --}}

{{--                                                        <div class="card-body">--}}

{{--                                                            <div class="pl-lg-1">--}}

{{--                                                                <h6 class="heading-small text-muted mb-1">Procurement Team</h6>--}}
{{--                                                                <hr class="my-2 mb-4" />--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="project_name2" ><strong>Project Name:</strong></label>--}}
{{--                                                                            <input disabled required type="text"name="project_name2" id="project_name2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label" for="quantity2"><strong>Quantity:</strong></label>--}}
{{--                                                                            <input disabled required type="text" name="quantity2" id="quantity2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="item_description2" ><strong>Item Description:</strong></label>--}}
{{--                                                                            <textarea disabled required type="text" name="item_description2" id="item_description2" class="form-control" style="border-radius: 7px"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="supplier_name2" ><strong>Supplier Name:</strong></label>--}}
{{--                                                                            <input disabled type="text" name="supplier_name2" id="supplier_name2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label for="product_status" class=" form-control-label">Status</label>--}}
{{--                                                                            <!--                                                    <input type="text" id="postal-code" placeholder="Postal Code" class="form-control"></div>-->--}}
{{--                                                                            <select disabled name="product_status2" id="product_status2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                                <option value="pending">Pending</option>--}}
{{--                                                                                <option value="ordered">Order Made</option>--}}
{{--                                                                            </select>--}}
{{--                                                                            <span class="text-danger">@error('product_status') {{$message}} @enderror</span>--}}

{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="in_charge2" ><strong>Personnel In-charge:</strong></label>--}}
{{--                                                                            <input disabled  required type="text" name="in_charge2" id="in_charge2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label" for="deadline2"><strong>Deadline/Priority:</strong></label>--}}
{{--                                                                            <input disabled required type="date" name="deadline2" id="deadline2" class="form-control" placeholder="dd/mm/yyyy" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label" for="exp_delivery_loc2"><strong>Expected Delivery Location:</strong></label>--}}
{{--                                                                            <input disabled required type="text" name="exp_delivery_loc2" id="exp_delivery_loc2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                            </div>--}}


{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    <div class="results">--}}
{{--                                                        @if(\Illuminate\Support\Facades\Session::get('warning'))--}}
{{--                                                            <div class="alert alert-warning_change">--}}
{{--                                                                <script>--}}
{{--                                                                    swal("Nope! You are not authorized to access this page!", {--}}
{{--                                                                        icon: "warning",--}}
{{--                                                                    });--}}
{{--                                                                </script>--}}
{{--                                                            </div>--}}
{{--                                                        @endif--}}
{{--                                                        @if(\Illuminate\Support\Facades\Session::get('success'))--}}
{{--                                                            <div class="alert alert-warning_change">--}}
{{--                                                                <script>--}}
{{--                                                                    swal("Great! procurement added!", {--}}
{{--                                                                        icon: "success",--}}
{{--                                                                    });--}}
{{--                                                                </script>--}}
{{--                                                            </div>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                                <div class="col-xl-4 order-xl-1">--}}
{{--                                                    <div class="card" style="   border-radius: 20px 20px 0 0;">--}}
{{--                                                        --}}{{--   procurement form --}}
{{--                                                        <div class="card-body">--}}
{{--                                                            <div class="pl-lg-1">--}}
{{--                                                                <h6 class="heading-small text-muted mb-1 mt-2" style="color: black">Editable by (Personnel In-charge)</h6>--}}
{{--                                                                <hr class="my-2 mb-4" />--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label " for="procurement_date2" ><strong>Procurement Date:</strong></label>--}}
{{--                                                                            <input disabled type="date" name="procurement_date2" id="procurement_date2"  placeholder="dd/mm/yyyy" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-control-label" for="expected_ready2"><strong>Expected Readiness:</strong></label>--}}
{{--                                                                            <input disabled type="date" name="expected_ready2" id="expected_ready2" placeholder="dd/mm/yyyy" class="form-control" style="border-radius: 7px">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    @if(\Illuminate\Support\Facades\Session::get('warning'))--}}
{{--                                                        <div class="alert alert-warning_change">--}}
{{--                                                            <script>--}}
{{--                                                                swal("Nope! You are not authorized to access this page!", {--}}
{{--                                                                    icon: "warning",--}}
{{--                                                                });--}}
{{--                                                            </script>--}}
{{--                                                        </div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xl-4 order-xl-1">--}}
{{--                                                    <div class="card" style="   border-radius: 20px 20px 0 0;">--}}
{{--                                                        --}}{{--   procurement form --}}
{{--                                                        --}}{{--      if procurement is = 1 then they can edit this section--}}
{{--                                                        @if($employee->procurement == 1)--}}
{{--                                                            <div class="card-body">--}}
{{--                                                                <div class="pl-lg-1">--}}
{{--                                                                    <h6 class="heading-small text-muted mb-1 mt-2" style="color: black">Editable by (Delivery Personnel)</h6>--}}
{{--                                                                    <hr class="my-2 mb-4" />--}}
{{--                                                                    <div class="row">--}}
{{--                                                                        <div class="col-lg-6">--}}
{{--                                                                            <div class="form-group">--}}
{{--                                                                                <label class="form-control-label " for="delivery_means2" ><strong>Means of Delivery?</strong></label>--}}
{{--                                                                                <input  type="text" name="delivery_means2" id="delivery_means2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-lg-6">--}}
{{--                                                                            <div class="form-group">--}}
{{--                                                                                <label class="form-control-label" for="delivery_date2"><strong>Delivery Date:</strong></label>--}}
{{--                                                                                <input  type="date" name="delivery_date2" id="delivery_date2" placeholder="dd/mm/yyyy" class="form-control" style="border-radius: 7px">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="row">--}}
{{--                                                                        <div class="col-lg">--}}
{{--                                                                            <div class="form-group">--}}
{{--                                                                                <label class="form-control-label " for="cur_delivery_loc2" ><strong>Delivery To:</strong></label>--}}
{{--                                                                                <input  type="text" name="cur_delivery_loc2" id="cur_delivery_loc2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}

{{--                                                                </div>--}}


{{--                                                            </div>--}}
{{--                                                        @else--}}
{{--                                                            <div class="card-body">--}}
{{--                                                                <div class="pl-lg-1">--}}
{{--                                                                    <h6 class="heading-small text-muted mb-1 mt-2" style="color: black">Editable by (Delivery Personnel)</h6>--}}
{{--                                                                    <hr class="my-2 mb-4" />--}}
{{--                                                                    <div class="row">--}}
{{--                                                                        <div class="col-lg-6">--}}
{{--                                                                            <div class="form-group">--}}
{{--                                                                                <label class="form-control-label " for="delivery_means2" ><strong>Means of Delivery?</strong></label>--}}
{{--                                                                                <input disabled type="text" name="delivery_means2" id="delivery_means2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-lg-6">--}}
{{--                                                                            <div class="form-group">--}}
{{--                                                                                <label class="form-control-label" for="delivery_date2"><strong>Delivery Date:</strong></label>--}}
{{--                                                                                <input disabled type="date" name="delivery_date2" id="delivery_date2" placeholder="dd/mm/yyyy" class="form-control" style="border-radius: 7px">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="row">--}}
{{--                                                                        <div class="col-lg">--}}
{{--                                                                            <div class="form-group">--}}
{{--                                                                                <label class="form-control-label " for="cur_delivery_loc2" ><strong>Delivery To:</strong></label>--}}
{{--                                                                                <input disabled  type="text" name="cur_delivery_loc2" id="cur_delivery_loc2" class="form-control" style="border-radius: 7px">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}


{{--                                                            </div>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}

{{--                                                    @if(\Illuminate\Support\Facades\Session::get('warning'))--}}
{{--                                                        <div class="alert alert-warning_change">--}}
{{--                                                            <script>--}}
{{--                                                                swal("Nope! You are not authorized to access this page!", {--}}
{{--                                                                    icon: "warning",--}}
{{--                                                                });--}}
{{--                                                            </script>--}}
{{--                                                        </div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}

{{--                                        <div class="col mb-5">--}}
{{--                                            <button type="reset" class="btn btn-danger float-right pr-5 pl-5 shadow mb-4" style="border-radius: 5px">reset</button>--}}
{{--                                            <button type="submit" class="btn btn-success float-right pr-5 pl-5 shadow  mr-4 mb-4" style="border-radius: 5px">Submit</button>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>

</body>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

    $('#procurement').on('shown.bs.modal', function (event) {
        const modal = $(this)
        const button = $(event.relatedTarget)
// const id = button.data('id')
// const username = button.data('username')
// const department = button.data('department')
        const project_name = button.data('project_name')
        const item_description = button.data('item_description')
        const in_charge = button.data('in_charge')
        const deadline = button.data('deadline')
        const quantity = button.data('quantity')
        const supplier_name = button.data('supplier_name')
        const product_status = button.data('product_status')
        const procurement_date = button.data('procurement_date')
        const expected_ready = button.data('expected_ready')
        const delivery_means = button.data('delivery_means')
        const delivery_date = button.data('delivery_date')
        const exp_delivery_loc = button.data('exp_delivery_loc')
        const cur_delivery_loc = button.data('cur_delivery_loc')
// $('#exampleModal').modal('show');




// modal.find('.modal-body #username').val(username);
// modal.find('.modal-body #department').val(department);
        modal.find('.modal-body #project_name1').val(project_name);
        modal.find('.modal-body #item_description1').val(item_description);
        modal.find('.modal-body #in_charge1').val(in_charge);
        modal.find('.modal-body #deadline1').val(deadline);
        modal.find('.modal-body #quantity1').val(quantity);
        modal.find('.modal-body #supplier_name1').val(supplier_name);
        modal.find('.modal-body #product_status1').val(product_status);
        modal.find('.modal-body #procurement_date1').val(procurement_date);
        modal.find('.modal-body #expected_ready1').val(expected_ready);
        modal.find('.modal-body #delivery_means1').val(delivery_means);
        modal.find('.modal-body #delivery_date1').val(delivery_date);
        modal.find('.modal-body #exp_delivery_loc1').val(exp_delivery_loc);
        modal.find('.modal-body #cur_delivery_loc1').val(cur_delivery_loc);


    });



    $('#procurement_edit').on('shown.bs.modal', function (event) {
        const modal = $(this)
        const button = $(event.relatedTarget)
        const id = button.data('id1')
        const edited = button.data('edited')
// const department = button.data('department')
        const project_name = button.data('project_name1')
        const item_description = button.data('item_description1')
        const in_charge = button.data('in_charge1')
        const deadline = button.data('deadline1')
        const quantity = button.data('quantity1')
        const supplier_name = button.data('supplier_name1')
        const product_status = button.data('product_status1')
        const procurement_date = button.data('procurement_date1')
        const expected_ready = button.data('expected_ready1')
        const delivery_means = button.data('delivery_means1')
        const delivery_date = button.data('delivery_date1')
        const exp_delivery_loc = button.data('exp_delivery_loc1')
        const cur_delivery_loc = button.data('cur_delivery_loc1')
// $('#exampleModal').modal('show');




        modal.find('.modal-body #edited').val(edited);
// modal.find('.modal-body #department').val(department);
        modal.find('.modal-body #project_name2').val(project_name);
        modal.find('.modal-body #item_description2').val(item_description);
        modal.find('.modal-body #in_charge2').val(in_charge);
        modal.find('.modal-body #deadline2').val(deadline);
        modal.find('.modal-body #quantity2').val(quantity);
        modal.find('.modal-body #supplier_name2').val(supplier_name);
        modal.find('.modal-body #product_status2').val(product_status);
        modal.find('.modal-body #procurement_date2').val(procurement_date);
        modal.find('.modal-body #expected_ready2').val(expected_ready);
        modal.find('.modal-body #delivery_means2').val(delivery_means);
        modal.find('.modal-body #delivery_date2').val(delivery_date);
        modal.find('.modal-body #exp_delivery_loc2').val(exp_delivery_loc);
        modal.find('.modal-body #cur_delivery_loc2').val(cur_delivery_loc);


    });

</script>

</html>
