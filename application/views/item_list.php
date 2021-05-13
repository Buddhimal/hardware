<div class="wrapper">

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark"></h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content -->


		<section class="content">
			<div class="container-fluid">
                <div class="form-group row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 col-form-label" style="text-align:center;">Item List</div>
                    <div class="col-sm-4"></div>
                </div>

				<div class="row">
                    <div class="col-sm-10">
                        <form action="" method="get" class="form-horizontal">
                            <div class="row">
                                <div class="col-sm-8">
                                    <!-- text input -->
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Search by:</label>
                                        <div class="col-sm-4">
                                            <select id="drpoption" class="form-control" name="drpoption">
                                                <option>item code</option>
                                                <option>price</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select id="drpoptionvalue" class="form-control" name="drpoptionvalue">
                                                <option>23</option>
                                                <option>46</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                        <input type="submit" class="form-control btn-secondary" value="Search"/>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
                               
                            </div>
                        </form>
                

                    </div>
                    <div class="col-sm-2">
                        <input type="submit" class="form-control btn-default" placeholder="Email" value="Create Item" onclick="alert();"/>
                    </div>


				</div>

                <div class="row">
                    <div class="col-sm-12">
                    <div class="card" >

                            <!-- /.card-header -->
                            <div class="card-body col-sm-12">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Item Code</th>
                                        <th>Item Name</th>
                                        <th>Supplier</th>
                                        <th>SKU Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>23</td>
                                            <td>Holcim Cement</td>
                                            <td>J K S Supplier</td>
                                            <td>Cement</td>
                                            <td>Active</td>
                                            <td><span class="fa fa-pen" onclick="alert();"></span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Item Code</th>
                                        <th>Item Name</th>
                                        <th>Supplier</th>
                                        <th>SKU Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            </div>
                        </div>





                </div>
			</div>
		</section>
	</div>
	<!-- /.content-wrapper -->



