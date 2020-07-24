
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
           <link rel="stylesheet" href="bootstrap/css/mystyle.css">
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  
	
		<script src="js/jq.js"></script>
		<!---- for moving objects make this first always after boootstrap.css ----->
	
		<link rel="stylesheet" href="css/bootstrap.css">
		<!---- Bootstrap.min link local project skeleton ----->
	
		<link rel="stylesheet" href="css/w3.css">
		<!--- This is the local w3css extended --->
		
		<link rel="stylesheet" href="css/animate.css">
		
		<link rel="stylesheet" href="css/style.css">
		<!---- my own link local for customizing ----->
	
		<script src="js/bootstrap.min.js"></script>
		<!---- Bootstrap js link local for well and modal + panels ----->
		
		<link rel="icon" href="images/a.png" type="images/water.png" />
		<!---- Icon link local ----->
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<!-------    font awesome online plug --------------->
 		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title>comande</title>
    </head>
    <body style="margin: 0px ;">
        
       
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#myinfo"> <i class="fa fa-home fa-2x"  aria-hidden="true"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span > <i class="fa fa-home" aria-hidden="true"></i>
          </span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mr-auto "  >
            <li class="nav-item   ">
              <a class="nav-link" href="index.php#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#avantage">avantage</a>
              </li>
              <li class="nav-item">
           <a class="nav-link " href="index.php#pro">produit</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#footer">contacte nous</a>
              </li>
              

             
              <ul>
                  <p style="color:red; font-size: 20px;">هذه الصفحة لا تزال في طور الاعداد</p>
              </ul>
         
    </nav>    <br><br><br>

    
    
    <form method="POST" action="print.php" >
    
    	<div class="wrapper">
			<div class="container-fluid" id="top-container-fluid-nav">
				<div class="container">	
					<!---- for nav container ----->	
				</div>
			</div> 
			
					
			<div class="container-fluid" id="body-container-fluid">
				<div class="container">
					<!---- for body container ---->
					<div class="row">
                                            
					<div class="col-lg-6" style="line-height:1.3em"><br><br>
                                            <h4><label>information de client !!</label></h4>
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
						<p>
                                                    <input class="w3-input" name="nome" placeholder=" nome et prenome" type="text"></p>
						<input class="w3-input" name="ste" placeholder="société" type="text"></p>
						<input class="w3-input" name="gsm" placeholder="GSM" type="text"></p>
						<input class="w3-input" name="ville" placeholder="ville" type="text">
                                                </p>
                                                
                                                <br><br>
                                                <div class="alert alert-secondary" role="alert">
                                                 <?php echo $err; ?>     
                                        </div>
					</div>
			
					
					<div class="col-lg-6"><br><br>
                                            <h4><label>information de comande </label></h4>
                                        <br>
										<div class="row">
					  <div class="col-4">
						<h5>produit</h5>
					  </div>
                                            <div class="col-3">	
                                                 <h5>quantité</h5>
					  </div>
					  <div class="col-5">
						<h5>type</h5>
					  </div>
					  
                                           
					</div>
                                        
                                                               
						
					<div class="row">
                                            
                                            
					  <div class="col-5">
                                              <select class="w3-select" name="pro1" style="font-size: 10px;">
								<option  disabled selected></option>
                                                                <option >tube oronge 9</option>
									<option >tube oronge 11</option>
									<option >tube oronge 13</option>
									<option>tube oronge 16</option>
									<option >tube oronge 21</option>
                                                                        <option value="April"></option>
                                                                        <option >izogrie 09</option>
                                                                        <option >izogrie 13</option>
                                                                        <option>izogrie 16</option>
                                                                        <option >izogrie 21</option>
                                                                        <option >izogrie 29</option>
                                                                        <option ></option>
                                                                        <option >boite carrée</option>
                                                                        <option >boite rond</option>
									
																		
							</select> 
					  </div>
                                            <div class="col-3">	
                                                <input type="text" name="qte1" class="w3-select" >
					  </div>
					
					  <div class="col-4">	
							<select class="w3-select" name="ty1">
                                                                       <option   ></option>
							         	<option  >yahya</option>
									<option>saad</option>
							</select> 
					  </div>					
                                        
					</div>
                                        
					<div class="row">
                                            
                                            
					  <div class="col-5">
                                              <select class="w3-select" name="pro2" style="font-size: 10px;">
								<option value=""  selected></option>
                                                               <option >tube oronge 9</option>
									<option >tube oronge 11</option>
									<option >tube oronge 13</option>
									<option>tube oronge 16</option>
									<option >tube oronge 21</option>
                                                                        <option value="April"></option>
                                                                        <option >izogrie 09</option>
                                                                        <option >izogrie 13</option>
                                                                        <option>izogrie 16</option>
                                                                        <option >izogrie 21</option>
                                                                        <option >izogrie 29</option>
                                                                        <option ></option>
                                                                        <option >boite carrée</option>
                                                                        <option >boite rond</option>
									
																		
							</select> 
					  </div>
                                            <div class="col-3">	
                                                <input type="text" class="w3-select" name="qte2">
					  </div>
					
					  <div class="col-4">	
							<select class="w3-select" name="ty2">
                                                                     <option value=""  ></option>
								     <option >yahya</option>
								     <option >saad</option>
							</select> 
					  </div>					
                                        
					</div>
                                        
                                        	
					<div class="row">
                                            
                                            
					  <div class="col-5">
                                              <select class="w3-select" name="pro3" style="font-size: 10px;">
								<option value="" disabled selected></option>
                                                                <option >tube oronge 9</option>
									<option >tube oronge 11</option>
									<option >tube oronge 13</option>
									<option>tube oronge 16</option>
									<option >tube oronge 21</option>
                                                                        <option value="April"></option>
                                                                        <option >izogrie 09</option>
                                                                        <option >izogrie 13</option>
                                                                        <option>izogrie 16</option>
                                                                        <option >izogrie 21</option>
                                                                        <option >izogrie 29</option>
                                                                        <option ></option>
                                                                        <option >boite carrée</option>
                                                                        <option >boite rond</option>
									
																		
							</select> 
					  </div>
                                            <div class="col-3">	
                                                <input type="text" class="w3-select" name="qte3" >
					  </div>
					
					  <div class="col-4">	
							<select class="w3-select" name="ty3">
                                                            <option value=""  ></option>
								<option >yahya</option>
									<option >saad</option>
							</select> 
					  </div>					
                                        
					</div>
                                        
                                        
                                        	
					<div class="row">
                                            
                                            
					  <div class="col-5">
                                              <select class="w3-select" name="pro4" style="font-size: 10px;">
								<option value="" disabled selected></option>
                                                              <option >tube oronge 9</option>
									<option >tube oronge 11</option>
									<option >tube oronge 13</option>
									<option>tube oronge 16</option>
									<option >tube oronge 21</option>
                                                                        <option value="April"></option>
                                                                        <option >izogrie 09</option>
                                                                        <option >izogrie 13</option>
                                                                        <option>izogrie 16</option>
                                                                        <option >izogrie 21</option>
                                                                        <option >izogrie 29</option>
                                                                        <option ></option>
                                                                        <option >boite carrée</option>
                                                                        <option >boite rond</option>
																		
							</select> 
					  </div>
                                            <div class="col-3">	
                                                <input type="text" class="w3-select" name="qte4" >
					  </div>
					
					  <div class="col-4">	
							<select class="w3-select" name="ty4">
                                                            <option value=""  ></option>
						            <option  >yahya</option>
							    <option >saad</option>
							</select> 
					  </div>					
                                        
					</div>
                                        
                                        
                                        
                                        	
					<div class="row">
                                            
                                            
					  <div class="col-5">
                                              <select class="w3-select" name="pro5" style="font-size: 10px;">
								<option value="" disabled selected></option>
                                                                <option >tube oronge 9</option>
									<option >tube oronge 11</option>
									<option >tube oronge 13</option>
									<option>tube oronge 16</option>
									<option >tube oronge 21</option>
                                                                        <option value="April"></option>
                                                                        <option >izogrie 09</option>
                                                                        <option >izogrie 13</option>
                                                                        <option>izogrie 16</option>
                                                                        <option >izogrie 21</option>
                                                                        <option >izogrie 29</option>
                                                                        <option ></option>
                                                                        <option >boite carrée</option>
                                                                        <option >boite rond</option>
									
																		
							</select> 
					  </div>
                                            <div class="col-3">	
                                                <input type="text" class="w3-select" name="qte5">
					  </div>
					
					  <div class="col-4">	
							<select class="w3-select" name="ty5">
                                                            <option value="" ></option>
								<option >yahya</option>
									<option>saad</option>
							</select> 
					  </div>					
                                        
					</div>
                                        
                                        
                                        
                                        	
					<div class="row">
                                            
                                            
					  <div class="col-5">
                                              <select class="w3-select" name="pro6" style="font-size: 10px;">
								<option value="" disabled selected></option>
                                                               <option >tube oronge 9</option>
									<option >tube oronge 11</option>
									<option >tube oronge 13</option>
									<option>tube oronge 16</option>
									<option >tube oronge 21</option>
                                                                        <option value="April"></option>
                                                                        <option >izogrie 09</option>
                                                                        <option >izogrie 13</option>
                                                                        <option>izogrie 16</option>
                                                                        <option >izogrie 21</option>
                                                                        <option >izogrie 29</option>
                                                                        <option ></option>
                                                                        <option >boite carrée</option>
                                                                        <option >boite rond</option>
									
																		
							</select> 
					  </div>
                                            <div class="col-3">	
                                                <input type="text" class="w3-select" name="qte6">
					  </div>
					
					  <div class="col-4">	
							<select class="w3-select" name="ty6">
                                                            <option value=""  ></option>
								<option>yahya</option>
								<option >saad</option>
							</select> 
					  </div>					
                                        
					</div>
                                        
                                        <!--    --------------------  -->
                                        	
                                        
                                        	
					<div class="row">
                                            
                                            
					  <div class="col-5">
                                              <select class="w3-select" name="pro7" style="font-size: 10px;">
								<option value="" disabled selected></option>
                                                               <option >tube oronge 9</option>
									<option >tube oronge 11</option>
									<option >tube oronge 13</option>
									<option>tube oronge 16</option>
									<option >tube oronge 21</option>
                                                                        <option value="April"></option>
                                                                        <option >izogrie 09</option>
                                                                        <option >izogrie 13</option>
                                                                        <option>izogrie 16</option>
                                                                        <option >izogrie 21</option>
                                                                        <option >izogrie 29</option>
                                                                        <option ></option>
                                                                        <option >boite carrée</option>
                                                                        <option >boite rond</option>
									
																		
							</select> 
					  </div>
                                            <div class="col-3">	
                                                <input type="text" class="w3-select" name="qte7">
					  </div>
					
					  <div class="col-4">	
							<select class="w3-select" name="ty7">
                                                            <option value=""  ></option>
								<option >yahya</option>
									<option >saad</option>
							</select> 
					  </div>					
                                        
					</div>
                                        
                                        
                                        	
					<div class="row">
                                            
                                            
					  <div class="col-5">
                                              <select class="w3-select" name="pro8" style="font-size: 10px;">
								<option value="" disabled selected></option>
                                                                <option >tube oronge 9</option>
									<option >tube oronge 11</option>
									<option >tube oronge 13</option>
									<option>tube oronge 16</option>
									<option >tube oronge 21</option>
                                                                        <option value="April"></option>
                                                                        <option >izogrie 09</option>
                                                                        <option >izogrie 13</option>
                                                                        <option>izogrie 16</option>
                                                                        <option >izogrie 21</option>
                                                                        <option >izogrie 29</option>
                                                                        <option ></option>
                                                                        <option >boite carrée</option>
                                                                        <option >boite rond</option>
									
																		
							</select> 
					  </div>
                                            <div class="col-3">	
                                                <input type="text" class="w3-select" name="qte8">
					  </div>
					
					  <div class="col-4">	
							<select class="w3-select" name="ty8">
                                                            <option value=""  ></option>
								<option >yahya</option>
									<option >saad</option>
							</select> 
					  </div>					
                                        
					</div>
                                        
                                        
                                        	
					<div class="row">
                                            
                                            
					  <div class="col-5">
                                              <select class="w3-select" name="pro9" style="font-size: 10px;">
								<option value="" disabled selected></option>
                                                               <option >tube oronge 9</option>
									<option >tube oronge 11</option>
									<option >tube oronge 13</option>
									<option>tube oronge 16</option>
									<option >tube oronge 21</option>
                                                                        <option value="April"></option>
                                                                        <option >izogrie 09</option>
                                                                        <option >izogrie 13</option>
                                                                        <option>izogrie 16</option>
                                                                        <option >izogrie 21</option>
                                                                        <option >izogrie 29</option>
                                                                        <option ></option>
                                                                        <option >boite carrée</option>
                                                                        <option >boite rond</option>
									
																		
							</select> 
					  </div>
                                            <div class="col-3">	
                                                <input type="text" class="w3-select" name="qte9">
					  </div>
					
					  <div class="col-4">	
							<select class="w3-select" name="ty9">
                                                            <option value=""  ></option>
								<option >yahya</option>
									<option >saad</option>
							</select> 
					  </div>					
                                        
					</div>
                                        
                                        
                                        	
					<div class="row">
                                            
                                            
					  <div class="col-5">
                                              <select class="w3-select" name="pro10" style="font-size: 10px;">
								<option value="" disabled selected></option>
                                                            <option >tube oronge 9</option>
									<option >tube oronge 11</option>
									<option >tube oronge 13</option>
									<option>tube oronge 16</option>
									<option >tube oronge 21</option>
                                                                        <option value="April"></option>
                                                                        <option >izogrie 09</option>
                                                                        <option >izogrie 13</option>
                                                                        <option>izogrie 16</option>
                                                                        <option >izogrie 21</option>
                                                                        <option >izogrie 29</option>
                                                                        <option ></option>
                                                                        <option >boite carrée</option>
                                                                        <option >boite rond</option>
																		
							</select> 
					  </div>
                                            <div class="col-3">	
                                                <input type="text" class="w3-select" name="qte10">
					  </div>
					
					  <div class="col-4">	
							<select class="w3-select" name="ty10">
                                                            <option value=""  ></option>
								<option value="">yahya</option>
                                                                <option >saad</option>
							</select> 
					  </div>					
                                        
					</div>
                                        
                                        
                                        
                                        
                                           </div>
					</div>
					
					<br>
                                        <INPUT type="submit" name="env" class="w3-button w3-block w3-teal" value="envoyer">
					
					</div>

					</div>
				</div>
    </form> 
			</div>
				
						
 
			<div class="container-fluid" id="footer-container-fluid">
				<div class="container">
					<!---- for footer container ---->
 				</div>
			</div>
  			
				
			
		</div>
    
    
    
    
    
    
    
    
    
    </body>
</html>