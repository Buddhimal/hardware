<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark" style="float:right;">Product Inventory</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Inventory</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="row mb-2" style="flex:auto;">
                        <div id="block1" class="form-group col-sm-0.5" style="flex:auto;">

                        </div>
                        <!--                        <form method="get" action="/">-->
                        <div id="block1" class="form-group col-sm-1.5">
                            From Date:
                        </div>

                        <div class="col-sm-2">
                            <div class="input-group date" id="reservationfromdate" data-target-input="nearest">
                                <input type="text" id="from" name="from" class="form-control datetimepicker-input"
                                       data-target="#reservationfromdate"/>
                                <div class="input-group-append" data-target="#reservationfromdate"
                                     data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- Main content -->
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="row mb-2" style="flex:auto;">
                                        <div id="block1" class="form-group col-sm-0.5" style="flex:auto;">

                                        </div>
                                        <div id="block1" class="form-group col-sm-1.5">
                                            From Date:
                                        </div>

                                        <div class="col-sm-2">
                                            <input type="text" id="txtfromdate" size="30" class="form-control">

                                        </div>

                                        <div id="block2" class="form-group col-sm-1.5">
                                            To Date:
                                        </div>

                                        <div class="form-group col-sm-2">
                                            <input type="text" id="txttodate" size="30" class="form-control">
                                        </div>
                                        <div id="block2" class="form-group col-sm-1.5">
                                            To Date:
                                        </div>

                                        <div class="form-group col-sm-2">
                                            <div class="input-group date" id="reservationtodate"
                                                 data-target-input="nearest">
                                                <input type="text" id="to" name="to"
                                                       class="form-control datetimepicker-input"
                                                       data-target="#reservationtodate"/>
                                                <div class="input-group-append" data-target="#reservationtodate"
                                                     data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div id="block3" class="form-group col-sm-1.5">
                                            Search By:
                                        </div>

                                        <div class="form-group col-sm-2">
                                            <select class="form-control select2bs4" id="search_by" name="search_by">
                                                <option disabled="disabled" selected="selected">Select an Option
                                                </option>
                                                <option value="item">Item Code</option>
                                                <option value="price">Price</option>
                                            </select>
                                        </div>
                                        <div id="block3" class="form-group col-sm-1.5">
                                            Search By:
                                        </div>

                                        <div class="form-group col-sm-2">
                                            <select id="searchById" class="form-control select2bs4">
                                                <option disabled="disabled" selected="selected">Select an Option
                                                </option>
                                                <option>Item Code</option>
                                                <option>Price</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-0.5">

                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group col-sm-2">
                                            <select class="form-control select2bs4" id="param" name="param">
                                                <option>1011</option>
                                                <option>1100</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-1" style="flex:auto;">
                                            <button id="btnSearch" type="submit"
                                                    class="btn btn-block bg-gradient-secondary">Search
                                            </button>
                                        </div>
                                        <div class="form-group" style="flex:auto;">

                                        </div>
                                        <!--                        </form>-->
                                        <div class="form-group col-sm-0.5">

                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group col-sm-2">
                                            <select id="idListId" class="form-control select2bs4">
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-1" style="flex:auto;">
                                            <button id="btnSearch" type="button"
                                                    class="btn btn-block bg-gradient-secondary">Search
                                            </button>
                                        </div>
                                        <div class="form-group" style="flex:auto;">

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">

                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->

                                        <div class="card">

                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Item Code</th>
                                                        <th>Product Name</th>
                                                        <th>Item Group(s)</th>
                                                        <th>SKU</th>
                                                        <th>On Hand QTY</th>
                                                        <th>Reorder Level</th>
                                                        <th>Unit Type</th>
                                                        <th>Unit Price Rs.</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Internet
                                                            Explorer 4.0
                                                        </td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Internet
                                                            Explorer 5.0
                                                        </td>
                                                        <td>Win 95+</td>
                                                        <td>5</td>
                                                        <td>C</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Internet
                                                            Explorer 5.5
                                                        </td>
                                                        <td>Win 95+</td>
                                                        <td>5.5</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Internet
                                                            Explorer 6
                                                        </td>
                                                        <td>Win 98+</td>
                                                        <td>6</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 7</td>
                                                        <td>Win XP SP2+</td>
                                                        <td>7</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>AOL browser (AOL desktop)</td>
                                                        <td>Win XP</td>
                                                        <td>6</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.0</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.5</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 2.0</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.0</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.5</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.0</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.5</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Item Code</th>
                                                        <th>Product Name</th>
                                                        <th>Item Group(s)</th>
                                                        <th>SKU</th>
                                                        <th>On Hand QTY</th>
                                                        <th>Reorder Level</th>
                                                        <th>Unit Type</th>
                                                        <th>Unit Price Rs.</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->
                    </div>
                    <!-- /.content-wrapper -->
                </div>
            </div>
        </section>
    </div>
</div>



