<div class="wrapper">
 
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 
        <section class="content">
            <div class="container-fluid">
                <div class="row">
 
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-industry"></i></span>
 
                            <div class="info-box-content">
                                <span class="info-box-text">Weekly Sales</span>
                                <span class="info-box-number">
                                    25
                                </span>
                            </div>
 
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bars"></i></span>
 
                            <div class="info-box-content">
                                <span class="info-box-text">New Items</span>
                                <span class="info-box-number">4</span>
                            </div>
 
                        </div>
 
                    </div>
 
                    <div class="clearfix hidden-md-up"></div>
 
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><span class="fas fa-file"></span></span>
 
                            <div class="info-box-content">
                                <span class="info-box-text">Cash Invoices</span>
                                <span class="info-box-number">10</span>
                            </div>
 
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file"></i></span>
 
                            <div class="info-box-content">
                                <span class="info-box-text">Credit Invoices</span>
                                <span class="info-box-number">15</span>
                            </div>
 
                        </div>
                    </div>
                </div>
 
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card" style="height:50%;">
                            <div class="card-header border-1">
                                <h5 class="card-title">Supplier Analysis</h5>
                            </div>
                            <div class="card-body">
 
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="position-relative mb-4">
                                            <canvas id="supplierChart" height="200"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4"><i class="fas fa-circle text-success">&nbsp;&nbsp;</i>Active</div>
                                            <div class="col-sm-4" style="text-align:center;">55</div>
                                            <div class="col-sm-4">76%</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"><i class="fas fa-circle text-danger"></i>&nbsp;&nbsp;Inactive</div>
                                            <div class="col-sm-4" style="text-align:center;">15</div>
                                            <div class="col-sm-4">24%</div>
                                        </div>
 
                                    </div>
                                </div>
                            </div>
                        </div>
 
                        <div class="card" style="height:50%;">
                            <div class="card-header border-1">
                                <h5 class="card-title">Inventory Stock Analysis</h5>
                            </div>
                            <div class="card-body">
 
                                <div class="col-sm-12">
 
                                    <div class="position-relative mb-4">
                                        <canvas id="inventoryStockAnalysisChart" height="200"></canvas>
                                    </div>
 
                                </div>
 
                            </div>
                        </div>
 
                    </div>
 
                    <div class="col-lg-6">
                        <div class="card" style="height:50%;">
                            <div class="card-header border-1">
                                <h5 class="card-title">Sales Analysis</h5>
                            </div>
                            <div class="card-body">
 
                                <div class="position-relative mb-4">
                                    <canvas id="salesAnalysisChart" height="200"></canvas>
                                </div>
                            </div>
 
                        </div>
 
                        <div class="card" style="height:50%;">
                            <div class="card-header border-1">
                                <h5 class="card-title">Frequently Purchased Items</h5>
                            </div>
                            <div class="card-body">
 
                                <div class="position-relative mb-4">
                                    <canvas id="frequentlyPurchasedItemsChart" height="200"></canvas>
 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
            </div>
        </section>
    </div>
 
 

