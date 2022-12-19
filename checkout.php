<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
body {
   font-family: Arial;
   font-size: 17px;
   padding: 8px;
}
* {
   box-sizing: border-box;
}
.Fields {
   display: flex;
   flex-wrap: wrap;
   padding: 20px;
   justify-content: space-around;
}
.Fields div {
   margin-right: 10px;
}
label {
   margin: 15px;
}
.formContainer {
   margin: 10px;
   background-color: #efffc9;
   padding: 5px 20px 15px 20px;
   border: 1px solid rgb(191, 246, 250);
   border-radius: 3px;
}
input[type="text"] {
   display: inline-block;
   width: 100%;
   margin-bottom: 20px;
   padding: 12px;
   border: 1px solid #ccc;
   border-radius: 3px;
}
label {
   margin-left: 20px;
   display: block;
}
.icon-formContainer {
   margin-bottom: 20px;
   padding: 7px 0;
   font-size: 24px;
}
.checkout {
   background-color: #4caf50;
   color: white;
   padding: 12px;
   margin: 10px 0;
   border: none;
   width: 100%;
   border-radius: 3px;
   cursor: pointer;
   font-size: 17px;
}
.checkout:hover {
   background-color: #45a049;
}
a {
   color: black;
}
span.price {
   float: right;
   color: grey;
}
@media (max-width: 800px) {
.Fields {
   flex-direction: column-reverse;
}
}
</style>
</head>
<body>
<h1 style="text-align: center;">Checkout Form</h1>
<div class="Fields">
<div>
<div class="formContainer">
<form>
<div class="Fields">
<div>
<h3>Billing Address</h3>
<label for="fname">Full Name</label>
<input type="text" id="fname" name="firstname" />
<label for="email"> Email</label>
<input type="text" id="email" name="email" />
<label for="adr"> Address</label>
<input type="text" id="adr" name="address" />
</div>
<div>
<h3>Payment</h3>
<label for="cname">Name on Card</label>
<input type="text" id="cname" name="cardname" />
<label for="ccnum">Credit card number</label>
<input type="text" id="ccnum" name="cardnumber" />
<div class="Fields">
<div>
<label for="ccnum">Cash On Delivery</label>
<input type="text" id="ccnum" name="cardnumber" />
</div>
</div>
</div>
<a class="navbar-brand" href="index.html">HOME PAGE</a>
<input
type="submit"
value="Continue to checkout"
class="checkout"
/>
</form>
</div>
</div>
<div>
<div class="formContainer">
<h4>
Cart <span class="price" style="color:black"><b>2</b></span>
</h4>
<p>
<a style="text-decoration: none;" href="#">ITEM 1</a>
<span class="price">Rs.450</span>
</p>
<p>
<a style="text-decoration: none;" href="#">ITEM 2</a>
<span class="price">Rs.450</span>
</p>
<p>
Total <span class="price" style="color:black"><b>900</b></span>
</p>
</div>
</div>
</div>
</body>
</html>