@extends('Produits.tamplate')
@section('content')

<div class="row">
          <!-- Column -->
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-body">
               <div class="d-flex m-b-10 no-block">
                  <h5 class="card-title m-b-0 align-self-center">Liste des Produits</h5>
                  <div class="ml-auto text-light-blue">
					<ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12" role="tablist">
                      <li>
					  <a href="ecommerce-add-new.html" class="btn waves-effect waves-light btn-rounded btn-primary">Add Product</a>
					  </li>
						</ul>
                  </div>
                </div>
			    <div class="table-responsive m-t-10">
                  <table id="myTable" class="table color-table table-bordered product-table table-hover">
                    <thead>
                      <tr>
                         <td>ID</td>
						 <td>Product</td>
						 <td>Category</td>
					
						 <td>Price</td>
						 <td>QTY</td>
						 <td>Status</td>
						 <td class="op-0">&nbsp;</td>
                        <td class="op-0">&nbsp;</td>
						
						
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
					  <td>1245</td>
                         <td class="text-dark weight-600"><img src="assets/imgs/pro4.jpg" alt="" title=""> Riser white laptop <br>
                          </td>
                       <td>Technique</td>
						 <td>C1561</td>
					
						 <td>25</td>
						 <td>In Stock</td>
						 <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
						 	 <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
					  </tr>
					  
					  
					  <tr>
					  <td>5891</td>
                         <td class="text-dark weight-600"><img src="assets/imgs/pro5.jpg" alt="" title=""> Red wine lipstick <br>
                          </td>
                       <td>Women Accessories</td>
						 <td>P4545</td>
						
						 <td>140</td>
						 <td>In Stock</td>
						 <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
						 	 <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
					  </tr>
					  
					  <tr>
					  <td>1234</td>
                        <td class="text-dark weight-600"><img src="assets/imgs/pro3.jpg" alt="" title=""> Huawei Y512 phone <br>
                          </td>
                       <td>Phone</td>
						 <td>K5463</td>
					
						 <td>54</td>
						 <td>Out of Stock</td>
						 <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
						 	 <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
					  </tr>
					  
					  <tr>
					  <td>7811</td>
                         <td class="text-dark weight-600"><img src="assets/imgs/pro.jpg" alt="" title=""> Notebook Asus Aspire <br>
                          </td>
                       <td>Technique</td>
						 <td>A5415</td>
						
						 <td>5</td>
						 <td>In Stock</td>
						 <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
						 	 <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
					  </tr>
					  
					  
					  
					  
					  <tr>
					  <td>6587</td>
                         <td class="text-dark weight-600"><img src="assets/imgs/pro6.jpg" alt="" title=""> Rose hand cream <br>
                          </td>
                       <td>Cosmetics</td>
						 <td>Q4811</td>
						
						 <td>14</td>
						 <td>Out of Stock</td>
						 <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
						 	 <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
					  </tr>
					  
					  
					  
					  
					  
					  
					  
					   <tr>
					  <td>2451</td>
                         <td class="text-dark weight-600"><img src="assets/imgs/pro7.jpg" alt="" title="">Wood table in red <br>
                          </td>
                       <td>Furniture</td>
						 <td>F1561</td>
						
						 <td>321</td>
						 <td>In Stock</td>
						 <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
						 	 <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
					  </tr>
					  
					  
					  <tr>
					  <td>2611</td>
                         <td class="text-dark weight-600"><img src="assets/imgs/pro8.jpg" alt="" title=""> Baby oil for body <br>
                          </td>
                       <td>Oils</td>
						 <td>I1551</td>
						 
						 <td>985	</td>
						 <td>In Stock</td>
						 <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
						 	 <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
					  </tr>
					  
					  <tr>
					  <td>7891</td>
                        <td class="text-dark weight-600"><img src="assets/imgs/pro2.jpg" alt="" title=""> Women Gold ring <br>
                          </td>
                       <td>Women Accessories</td>
						 <td>A156</td>
						
						 <td>12</td>
						 <td>Out of Stock</td>
						 <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
						 	 <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
					  </tr>
					  
					  
					  
					  
					  
					  
					  
					  
					  
                      
                    </tbody>
                  </table>
                </div>
             
			   
              </div>
            </div>
          </div>
           <!-- Column -->
        </div>

@endsection        <!-- ============================================================== -->