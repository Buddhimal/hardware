<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Sales Transaction</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sales Transaction</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->


        <section class="content">
            <div class="container-fluid">
                <div class="row">

                <div class="row mb-2" style="flex:auto;">
                <div style="width:100%;">

                <div style="float:left;width:20%;"> 
                </div>

                <div style="float:left;width:20%;"> 
                </div>

                <div style="float:right;width:50%;"> 

<div>
<div  style="float:left;margin-left:40px;font-weight:600;">  
Invoice No
</div>
<div style="float:left;margin-left:20px;">  
<input type="text" class="form-control" placeholder="1124" disabled="">
</div>
<div style="float:left;margin-left:20px;width:210px;">  
<div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" style="flex:auto;" disabled="" placeholder="21/04/2021">
                            </div>

</div>
</div>


                                </div>


                </div>
                </div>

                    <!-- <div class="row mb-2" style="flex:auto;">
                        <div id="block01" class="form-group col-sm-7">

                        </div>
                        <div id="block1" class="form-group col-sm-1">
                            Invoice No
                        </div>
                        <div id="block15" class="form-group" style="margin-left:20px;">

                        </div>
                        <div id="block001" class="form-group col-sm-1.5">
                            <input type="text" class="form-control" placeholder="1124" disabled="">
                        </div>

                        <div id="block0001" class="form-group col-sm-2">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" style="flex:auto;" disabled="" placeholder="21/04/2021">
                            </div>

                        </div>
                    </div> -->

                    <!--  -->
<div style="width:100%;margin-top:30px;">
<div style="float:left;font-weight:600;">Customer Name</div>
<div style="float:left;margin-left:10px;"><input type="text" class="form-control" id="txtTel" style="width:300px;" ></div>
<div style="float:left;margin-left:10px;font-weight:600;">Address</div>
<div style="float:left;margin-left:10px;"><textarea id="txtAddr" class="form-control" rows="3" placeholder="Enter Address" style="width:300px;"></textarea></div>
<div style="float:left;margin-left:10px;font-weight:600;">Tel No.</div>
<div style="float:left;margin-left:10px;"><input type="text" class="form-control" id="txtTel" style="width:250px;" ></div>
</div>

<div style="padding:0px;width:50.5%;margin-top:20px;">
                    <div class="form-group col-sm-1.5" style="font-weight:600;">
                                Add Item
                            </div>
                    </div>
                    

<div style="border:1px solid;height:100px;background-color:#fff;width:67.5%;">
<div style="padding:30px;">
<div style="float:left;font-weight:600;">Item</div>
<div style="float:left;margin-left:15px;">
<select id="searchById" class="form-control select2bs4" style="width:160px;font-size:small;">
                                    <option disabled="disabled" selected="selected">Select an Option</option>
                                    <option>Item-4001</option>
                                </select>
</div>
<div style="float:left;margin-left:30px;font-weight:600;">Qty</div>
<div style="float:left;margin-left:15px;">
<input type="text" class="form-control" id="txtTel" style="width:100px;" />
</div>
<div style="float:left;margin-left:30px;font-weight:600;">Discount %</div>
<div style="float:left;margin-left:15px;">
<input type="text" class="form-control" id="txtTel" style="width:100px;" >
</div>
<div style="float:left;margin-left:15px;">
<input type="button" class="btn-primary" id="txtTel" style="width:100px;" value="Add" onclick="addToSalesTransactionTable();">
</div>
</div>
</div>


<!-- 
                    <div style="padding:0px;width:50.5%;margin-top:50px;">
                    <div class="form-group col-sm-1.5">
                                Add Item
                            </div>
                    </div>
                    
                    <div class="form-group" style="border:1px solid;padding:30px;height:100px;background-color:#fff;width:68.5%;">
                        <div class="row mb-2">
                            <div class="form-group col-sm-1.5" style="font-size:small;font-weight:800;">
                                Item
                            </div>
                            <div class="form-group" style="margin-left:10px;">

                            </div>
                            <div id="drpdwnItem" class="form-group col-sm-2">

                                <select id="searchById" class="form-control select2bs4" style="width:160px;font-size:small;">
                                    <option disabled="disabled" selected="selected">Select an Option</option>
                                    <option>Item-4001</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-1" style="margin-left:10px;">

                            </div>
                            <div class="form-group col-sm-1" style="font-size:small;font-weight:800;">
                                Qty
                            </div>

                            <div id="txtQty" class="form-group col-sm-2">
                                <input type="text" class="form-control pull-right" id="txtCusNameDiv" style="width:100px;font-size:small;">
                            </div>


                            <div class="form-group col-sm-1.5" style="font-size:small;font-weight:800;">
                                Discount %
                            </div>
                            <div class="form-group" style="margin-left:10px;">

                            </div>
                            <div id="txtDiscount" class="form-group col-sm-2">
                                <input type="text" class="form-control pull-right" id="txtCusNameDiv" style="width:100px;font-size:small;">
                            </div>


                            <div id="txtCusNameDiv" class="form-group col-sm-1">
                                <input type="button" class="btn-primary" id="btnAddItem" style="width:100px;font-size:small;height:35px;" value="Add" onclick="addToSalesTransactionTable();">
                            </div>

                        </div>
                    </div> -->
                    <div style="padding:0px;width:50.5%;margin-top:20px;">
                    </div>

                    <div class="form-group">
                        <div style="float:left;width:72%;">

                            <div class="card-body form-group col-sm-12" style="background-color:#fff;width:97%;">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="font-size:small;width:90px;">Item Code</th>
                                            <th style="font-size:small;width:120px;">Item Name</th>
                                            <th style="font-size:small;width:95px;">Item Group </th>
                                            <th style="font-size:small;width:120px;">Unit Price (Rs)</th>
                                            <th style="font-size:small;width:70px;">Type</th>
                                            <th style="font-size:small;width:90px;">Sales Qty</th>
                                            <th style="font-size:small;width:120px;">Total Price (Rs)</th>
                                            <th style="font-size:small;width:50px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <div style="float:left;background-color:#D5F2F8;width:310px;margin-left:4px;">
                            <div class="box-body box-profile">

                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item" style="float:left;background-color:#D5F2F8;">
                                        <div>
                                            <div style="float:left;margin-right:20px;font-weight:600;width:130px;font-size:small;"><span style="padding:5px;">Gross Total (Rs)</span></div>
                                            <div style="float:left;width:150px;padding:2px;"> <input type="text" class="form-control pull-right" id="txtGrossTot" style="width:150px;"></div>
                                        </div>
                                        <br />
                                        <div style="margin-top:15px;">
                                            <div style="float:left;margin-right:20px;font-weight:600;width:130px;font-size:small;"><span style="padding:5px;">Qty Total</span></div>
                                            <div style="float:left;width:150px;padding:2px;"> <input type="text" class="form-control pull-right" id="txtQtyTot" style="width:150px;"></div>
                                        </div>
                                        </br>
                                        <div style="margin-top:15px;">
                                            <div style="float:left;margin-right:20px;font-weight:600;width:130px;font-size:small;"><span style="padding:5px;">Tax</span></div>
                                            <div style="float:left;width:150px;padding:2px;">
                                                <select id="searchById" class="form-control select2bs4" style="width:150px;">
                                                    <option>5%</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div style="margin-top:15px;">
                                            <div style="float:left;margin-right:20px;font-weight:600;width:130px;font-size:small;"><span style="padding:5px;">Discount (Rs)</span></div>
                                            <div style="float:left;width:150px;padding:2px;"> <input type="text" class="form-control pull-right" id="txtDiscount" style="width:150px;"></div>
                                        </div>

                                    </li>

                                    <li class="list-group-item" style="float:left;background-color:#D5F2F8;">
                                        <div>
                                            <div style="float:left;margin-right:20px;font-weight:600;width:130px;font-size:small;"><span style="padding:5px;">Net Total (Rs)</span></div>
                                            <div style="float:left;width:150px;padding:2px;"> <input type="text" class="form-control pull-right" id="txtNetTot" style="width:150px;"></div>
                                        </div>


                                        <div style="padding:10px 10px 20px 10px;margin-top:80px;">
                                <a href="#" class="btn btn-primary btn-block"><b>Save</b></a>
                            </div>
                            <div style="padding-left:10px;padding-right:10px;padding-bottom:20px;">
                                <a href="#" class="btn btn-danger btn-block"><b>Cancel</b></a>
                                </div>


                                    </li>
                                </ul>

                           
                            </div>

                        </div>

                        <div>

                        </div>
                    </div>


                </div>
            </div>

        </section>
    </div>
    <!-- /.content-wrapper -->

</div>



