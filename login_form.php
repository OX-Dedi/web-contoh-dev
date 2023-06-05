<?php
//Halaman Formulir Login ini, jika pengguna sudah masuk (logged in), maka kita tidak akan mengizinkan pengguna mengakses halaman ini dengan menjalankan isset($_SESSION["uid"])
//Jika pernyataan di bawah ini mengembalikan nilai true, maka kami akan mengirimkan pengguna ke halaman profile.php mereka.
// di halaman action.php jika pengguna mengklik tombol "Siap untuk Checkout" pada saat itu kami akan mengirimkan data dalam bentuk formulir dari halaman action.php.
if (isset($_POST["login_user_with_product"])) {
	// ini adalah array daftar produk
	$product_list = $_POST["product_id"];
	// di sini kita sedang mengonversi array ke dalam format JSON karena array tidak dapat disimpan dalam cookie
	$json_e = json_encode($product_list);
	// di sini kita sedang membuat cookie dan nama cookie-nya adalah product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>

	<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="container-fluid">
				<!-- row -->
				

					<div class="login-marg">
						<!-- Billing Details -->
						
						
						<!-- /Billing Details -->
						
						
								<form onsubmit="return false" id="login" class="login100-form ">
									<div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Login Here</h2>
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                       <label for="email">Email</label>
                                        <input class="input input-borders" type="email" name="email" placeholder="Email" id="password" required>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label for="email">Password</label>
                                        <input class="input input-borders" type="password" name="password" placeholder="password" id="password" required>
                                    </div>
                                    
                                    <div class="text-pad" >
                                       <a href="#">
                                           forget password ?
                                       </a>
                                        
                                    </div>
                                    
                                        <input class="primary-btn btn-block"   type="submit"  Value="Login">
                                        
                                        <div class="panel-footer"><div class="alert alert-danger"><h4 id="e_msg"></h4></div></div>
                                    
                                    	
                                        
                                    

                                </div>
                                
								</form>
                           
						<!-- Shiping Details -->
						
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					
					<!-- /Order Details -->
				
				<!-- /row -->
			</div>