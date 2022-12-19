<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
</head>
<body>
  <div class="container">
       <div class="row">
           <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
           </div>

           <div class="col-lg-9">
            
                 <table class="table">
                      <thead class="thead-dark text-center">
                         <tr>
                               <th scope="col">Serial No.</th>
                                <th scope="col">Item_Name</th>
                                <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                          </tr>

                                   </thead>
                                  <tbody class="text-center">
                                      <?php
                                           $str=0;
                                           if(isset($_SESSION['cart']))
                                          {
                                            foreach($_SESSION['cart'] as $key => $value)
                                            {
                                                $int=$key+'1';
                                                $str=(string) $int+(int) $value['Price'];
                                                echo"
                                                <tr>
                                                  <td>$int</td>
                                                   <td>$value[Item_Name]</td>
                                                    <td>$value[Price]</td>
                                                    <td>
                                                      <input class='text-center' type='number' value='$value[Quantity]' min='1' max='5'>
                                                    </td>
                                                    <td>
                                                      <form action='managecart.php' method='POST'>
                                                        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                    </form></td>
                                                 </tr>
                                               ";
                                            }
                                           }
                                      ?>
                                 </tbody>
                   </table>
       </div>

       <div class="col-lg-3">
          <div class="border bg-light rounded p-4">
              <h4>Total:</h4>
              
              
              <h5 class="text-right"><?php echo $str ?></h5>
               <br>
               <form>

               <div class="form-check">
                         <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                             <label class="form-check-label" for="exampleRadios1">
                          Cash On Delivery
                        </label>
                </div><br>
                 <div class="form-check">
                   <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                   <label class="form-check-label" for="exampleRadios2">
                  Pay tm
                  </label>
                </div><br>
                  <div class="form-check">
                   <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                       <label class="form-check-label" for="exampleRadios3">
                       ICICI BANK
                       </label>
                 </div>
                 <center>
                 <a class="navbar-brand" href="checkout.php">CHECKOUT</a>
                 </center>
              </form>
          </div>
        </div>
         
       
       
       </div>

       </div>
   </div>    
    
</body>
</html>
*/

