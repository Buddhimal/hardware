<!DOCTYPE html>
<html>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Item</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="col-md-offset-3">
        <form role="form" class="col-md-6" >
 
          
        <div class="container-fluid">
    
            <div class="card card-default">
             <div class="card-header">
           
                 <div class="card-body">     
                   <div class="col-sm-6">                   
                      <div class="form-group">
                        <label>Item Name :</label>
                        <input type="text" class="form-control" placeholder="Item Name">
                      </div>
                    </div>

                    <div class="col-md-6">
                     <div class="form-group">
                       <label>SKU Code</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option>Cement</option>
                            <option>Amarno</option>                    
                           </select>
                     </div>
                    </div>

                <div class="col-md-6">
                  <div class="form-group">
                     <label>Supplier Code</label>
                       <select class="form-control select2" style="width: 100%;">
                         <option selected="selected">Active</option>
                         <option>Supplier 1</option>                
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                     <label>Unit Type</label>
                       <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Active</option>
                        <option>Bags</option>
                   
                    
                        </select>
                 </div>
                </div>
                   <div class="col-md-6">
                   <div class="form-group">
                   <label>Status</label>
                   <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Active</option>
                    <option>Active</option>
                    <option>Deactive</option>
                    
                  </select>
                </div>
                </div>
               
            
               
      
                <button type="button" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
                
                 </div>
       </div>
            </form>
    </section>
</body>
</html>