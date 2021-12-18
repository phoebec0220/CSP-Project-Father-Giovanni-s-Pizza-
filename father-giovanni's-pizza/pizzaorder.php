<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://use.fontawesome.com/7488f3a572.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="pizzastyles.css" />
    <title>Father Giovanni's Pizza: Order</title>
  </head>

  <body>
    <!-- Some images will show error in console due not having 'https' in the url,  nothing to worry about -->
    <input type="checkbox" id="cartToggle" name="toggle" />

    <!-- Menu -->
    <nav class="navbar">
      <h2 id="logo">Order Now</h2>
      <div>
        <label for="cartToggle" class="toggleCart btnStyle btnStyle2"
          ><i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <i class="fa fa-circle" aria-hidden="true"></i>
          <span class="num"></span>
        </label>
      </div>
    </nav>
    <!-- End of Navigation -->

    <div class="body-content">
      <!-- Cart -->
      <nav class="cart">
        <h3>List of orders: <span>0$</span></h3>
        <ol id="listOfOrders"></ol>
        <a class="btnStyle btnStyle3 finishOrder">Place Order</a>
      </nav>

      <div class="recipe-menu">
        <!-- Recipe 1, Build Your Own Pizza -->
        <div class="recipe">
          <p class="name">Create Your Own Pizza</p>
          <img
            src="https://lcemedia.littlecaesars.com/custompizza/CYO_RegLg.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartCustom"
            >Add to Cart</a>

          <p class="price"><span>12</span>$</p>
          <div id="checkOrderCustom" title="Custom">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize1">
              <li><input type="radio" name="size" value="9" />Small</li>
              <li><input type="radio" name="size" value="12" />Medium</li>
              <li><input type="radio" name="size" checked value="15" />Large</li>
              <li><input type="radio" name="size" value="18" />X-Large</li>
            </ul>

            <h3 class="listHeading">Sauce:</h3>
            <ul class="listOfIngredients" id="recipeSauce">
              <li><input type="radio" name="sauce" checked />Marinara Sauce</li>
              <li><input type="radio" name="sauce" />White Sauce</li>
              <li><input type="radio" name="sauce" />None</li>
            </ul>

            <h3 class="listHeading">Toppings:</h3>
            <ul class="listOfIngredients" id="recipe1">
              <li><input type="checkbox" />Pepperoni</li>
              <li><input type="checkbox" />Italian Sausage</li>
              <li><input type="checkbox" />Bacon</li>
              <li><input type="checkbox" />Seasoned Beef</li>
              <li><input type="checkbox" />Ham</li>
              <li><input type="checkbox" />Mushrooms</li>
              <li><input type="checkbox" />Onions</li>
              <li><input type="checkbox" />Black Olives</li>
              <li><input type="checkbox" />Green Peppers</li>
              <li><input type="checkbox" />Jalepeño Peppers</li>
              <li><input type="checkbox" />Pineapple</li>
            </ul>
            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize1">
              Size Total: <span>12</span>$
            </h4>

            <h4 class="totalDialog" id="totalDialog1">
              Toppings Total: <span>12</span>$
            </h4>

	   <h4 class="totalFinal" id="totalFinal1">
              Total: <span>0</span>$
            </h4>
	
          </div>
        </div>

        <!-- Recipe 2,  -->
        <div class="recipe">
          <p class="name">Macaroni</p>
          <img
            src="https://www.planetveggie.co.uk/wp-content/uploads/2014/08/spinach-pesto-mozzarella-pasta.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartMacaroni"
            >Add to Cart</a
          >
          <p class="price"><span>15</span>$</p>
          <div id="checkOrderMacaroni" title="Macaroni">

	    <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize2">
              <li><input type="radio" name="size" value="3" />Small</li>
              <li><input type="radio" name="size" value="6" />Medium</li>
              <li><input type="radio" name="size" checked value="9" />Large</li>
              <li><input type="radio" name="size" value="12" />X-Large</li>
            </ul>

            <h3 class="listHeading">List of Ingredients:</h3>
            <ul class="listOfIngredients" id="recipe2">
              <li><input type="checkbox" checked />Macaroni</li>
              <li><input type="checkbox" checked />Paprica</li>
              <li><input type="checkbox" checked />Tomato</li>
              <li><input type="checkbox" checked />Chease</li>
              <li><input type="checkbox" checked />Zucchini</li>
            </ul>
<!--            <a class="btnStyle3 btnStyle addIngredient">Add Ingredient</a>-->
            <a class="btnStyle listOver">Done</a>

	    <h4 class="totalSize" id="totalSize2">
              Size Total: <span>12</span>$
            </h4>

            <h4 class="totalDialog" id="totalDialog2">
              Total: <span>15</span>$
            </h4>

	   <h4 class="totalFinal" id="totalFinal2">
              Total: <span>0</span>$
            </h4>

          </div>
        </div>

        <!-- Recipe 3 -->
        <div class="recipe">
          <p class="name">Pizza</p>
          <img
            src="https://i.kinja-img.com/gawker-media/image/upload/wafswectpmbr0zmug9ly.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartPizza"
            >Add to Cart</a
          >
          <p class="price"><span>18</span>$</p>
          <div id="checkOrderPizza" title="Pizza">
	    <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize3">
              <li><input type="radio" name="size" value="3" />Small</li>
              <li><input type="radio" name="size" value="6" />Medium</li>
              <li><input type="radio" name="size" checked value="9" />Large</li>
              <li><input type="radio" name="size" value="12" />X-Large</li>
            </ul>

            <h3 class="listHeading">List of Ingredients:</h3>
            <ul class="listOfIngredients" id="recipe3">
              <li><input type="checkbox" checked />Tomato Sauce</li>
              <li><input type="checkbox" checked />Cheese</li>
              <li><input type="checkbox" checked />Peperoni</li>
              <li><input type="checkbox" checked />Olives</li>
              <li><input type="checkbox" checked />Mushrooms</li>
              <li><input type="checkbox" checked />Basil</li>
            </ul>
            <!--<a class="btnStyle3 btnStyle addIngredient">Add Ingredient</a>-->
            <a class="btnStyle listOver">Done</a>
	    <h4 class="totalSize" id="totalSize3">
              Size Total: <span>12</span>$
            </h4>

            <h4 class="totalDialog" id="totalDialog3">
              Total: <span>15</span>$
            </h4>

	   <h4 class="totalFinal" id="totalFinal3">
              Total: <span>0</span>$
            </h4>
          </div>
        </div>

        <!-- Recipe 4 -->
        <div class="recipe">
          <p class="name">Salad</p>
          <img
            src="http://tarasmulticulturaltable.com/wp-content/uploads/2015/03/Shopska-2-of-3-1024x680.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartSalad"
            >Add to Cart</a
          >
          <p class="price"><span>9</span>$</p>
          <div id="checkOrderSalad" title="Salad">

	    <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize4">
              <li><input type="radio" name="size" value="3" />Small</li>
              <li><input type="radio" name="size" value="6" />Medium</li>
              <li><input type="radio" name="size" checked value="9" />Large</li>
              <li><input type="radio" name="size" value="12" />X-Large</li>
            </ul>

            <h3 class="listHeading">List of Ingredients:</h3>
            <ul class="listOfIngredients" id="recipe4">
              <li><input type="checkbox" checked />Tomato</li>
              <li><input type="checkbox" checked />Cucumber</li>
              <li><input type="checkbox" checked />Cheese</li>
            </ul>
            <a class="btnStyle listOver">Done</a>
	    <h4 class="totalSize" id="totalSize4">
              Size Total: <span>12</span>$
            </h4>

            <h4 class="totalDialog" id="totalDialog4">
              Total: <span>15</span>$
            </h4>

	   <h4 class="totalFinal" id="totalFinal4">
              Total: <span>0</span>$
            </h4>
          </div>
        </div>

    <div id="finishOrderDialog" title="Confirm Order">
      <div id="finalOrderList">
        <h3>Your Orders:</h3>
        <ol></ol>
      </div>

      <form action="order_connect.php" method="post">      
        <table class="user_info">
          <div id="buyerInfo">
            <input type="text" id="buyerName" name="buyerName" placeholder="Enter Full Name" />
            <input type="text" id="buyerNumber" name="buyerNumber" placeholder="Enter Phone Number" />
            <input type="text" id="buyerAddress1" name="buyerAddress1" placeholder="Enter Address Line 1" />
            <input type="text" id="buyerAddress2" name="buyerAddress2" placeholder="Enter Address Line 2" />
            <input type="submit" value="Submit">
          </table>
       </div>
      </form>
    </div>

    <div id="thanksMessage">
      <h1>Thank you for the order</h1>
      <h3>We will have it delivered soon</h3>
    </div>

    <script src="order.js" type="module"></script>
  </body>
</html>
