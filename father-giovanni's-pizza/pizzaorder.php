<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://use.fontawesome.com/7488f3a572.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="pizza.css" />
    <title>Father Giovanni's Pizza: Order</title>
  </head>

  <body>
    <header>
      <div class="logo">
        <img
          src="logo2.png"
          alt="chef holding pizza and giving thumbs up"
          height="200px"
          width="auto"
        />
      </div>
      <div class="headerR">
        <div class="title">Father Giovanni's Pizza</div>
        <div class="navbar">
          <div>
            <button><a href="index.html">Home</a></button>
          </div>
          <div>
            <button><a href="menu.html">Menu</a></button>
          </div>
          <div>
            <button><a href="about.html">About</a></button>
          </div>
          <div>
            <button><a href="pizzaorder.php">Order</a></button>
          </div>
          <div style="float: right;">
            <label for="cartToggle" class="toggleCart btnStyle btnStyle2">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <span class="num"></span>
        </label>
      </div>
        </div>
      </div>
    </header>
    <div class="banner">Order</div>
    <!-- Some images will show error in console due not having 'https' in the url,  nothing to worry about -->
    <input type="checkbox" id="cartToggle" name="toggle" />


    <div class="body-content">
      <!-- Cart -->
      <nav class="cart">
        <h3>List of orders: <span>$0</span></h3>
        <ol id="listOfOrders"></ol>
        <a class="btnStyle btnStyle3 finishOrder">Place Order</a>
      </nav>
	  
      <div class="recipe-menu">

        <!-- Recipe 1, Build Your Own Pizza -->
        <div class="recipe">
          <p class="name">Create Your Own Pizza</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/pizzas/CYO-pizza-array-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartCustom"
            >Add to Cart</a>

		  <p class="price"><span>$9</span></p>
          <div id="checkOrderCustom" title="Create Your Own Pizza">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize1">
              <li><input type="radio" name="size" value="9" />Small</li>
              <li><input type="radio" name="size" value="12" />Medium</li>
              <li><input type="radio" name="size" value="15" checked />Large</li>
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
              Size Total: <span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog1">
              Toppings Total: <span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal1">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

        <!-- Recipe 2, Cheese Pizza -->
        <div class="recipe">
          <p class="name">Cheese Pizza</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/pizzas/cheese-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartCheesePizza"
            >Add to Cart</a
          >
          <p class="price"><span>$8</span></p>
          <div id="checkOrderCheesePizza" title="Cheese Pizza">

	    <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize2">
              <li><input type="radio" name="size" value="8" />Small</li>
              <li><input type="radio" name="size" value="11" />Medium</li>
              <li><input type="radio" name="size" checked value="14" />Large</li>
              <li><input type="radio" name="size" value="17" />X-Large</li>
            </ul>

            <a class="btnStyle listOver">Done</a>

	    <h4 class="totalSize" id="totalSize2">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog2">
              Total: <span>0</span>$
            </h4>

	   <h4 class="totalFinal" id="totalFinal2">
              Total: <span>0</span>$
            </h4>

          </div>
        </div>

        <!-- Recipe 3 -->
        <div class="recipe">
          <p class="name">Pepperoni Pizza</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/pizzas/pepperoni-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartPepperoniPizza"
            >Add to Cart</a>

		<p class="price"><span>$9</span></p>
          <div id="checkOrderPepperoniPizza" title="Pepperoni Pizza">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize3">
              <li><input type="radio" name="size" value="9" />Small</li>
              <li><input type="radio" name="size" value="12" />Medium</li>
              <li><input type="radio" name="size" checked value="15" />Large</li>
              <li><input type="radio" name="size" value="18" />X-Large</li>
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize3">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog3">
              Toppings Total: <span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal3">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

        <!-- Recipe 4 -->
        <div class="recipe">
          <p class="name">Sausage Pizza</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/pizzas/sausage-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartSausagePizza"
            >Add to Cart</a
          >
          <p class="price"><span>$9</span></p>
          <div id="checkOrderSausagePizza" title="Sausage Pizza">

	    <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize4">
              <li><input type="radio" name="size" value="9" />Small</li>
              <li><input type="radio" name="size" value="12" />Medium</li>
              <li><input type="radio" name="size" checked value="15" />Large</li>
              <li><input type="radio" name="size" value="18" />X-Large</li>
            </ul>


            <a class="btnStyle listOver">Done</a>
	    <h4 class="totalSize" id="totalSize4">
              Size Total: <span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog4">
              Total: <span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal4">
              Total: $<span>0</span>
            </h4>
          </div>
        </div>
		<!------------------>
		

        <!-- Recipe 5 -->
        <div class="recipe">
          <p class="name">Extra Cheesy Alfredo Pizza</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/pizzas/extra-cheesy-alfredo-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartAlfredoPizza"
            >Add to Cart</a>

		<p class="price"><span>$9</span></p>
          <div id="checkOrderAlfredoPizza" title="Extra Cheesy Alfredo Pizza">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize5">
              <li><input type="radio" name="size" value="9" />Small</li>
              <li><input type="radio" name="size" value="12" />Medium</li>
              <li><input type="radio" name="size" checked value="15" />Large</li>
              <li><input type="radio" name="size" value="18" />X-Large</li>
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize5">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog5">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal5">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

        <!-- Recipe 6 -->
        <div class="recipe">
          <p class="name">Tuscan Six Cheese Pizza</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/pizzas/tuscan-6cheese-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartTuscanPizza"
            >Add to Cart</a>

		<p class="price"><span>$9</span></p>
          <div id="checkOrderTuscanPizza" title="Tuscan Six Cheese Pizza">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize6">
              <li><input type="radio" name="size" value="9" />Small</li>
              <li><input type="radio" name="size" value="12" />Medium</li>
              <li><input type="radio" name="size" checked value="15" />Large</li>
              <li><input type="radio" name="size" value="18" />X-Large</li>
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize6">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog6">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal6">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

        <!-- Recipe 7 -->
        <div class="recipe">
          <p class="name">Hawaiian BBQ Chicken Pizza</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/pizzas/hawaiian-bbq-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartHawaiianPizza"
            >Add to Cart</a
          >
          <p class="price"><span>$9</span></p>
          <div id="checkOrderHawaiianPizza" title="Hawaiian BBQ Chicken Pizza">

	    <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize7">
              <li><input type="radio" name="size" value="9" />Small</li>
              <li><input type="radio" name="size" value="12" />Medium</li>
              <li><input type="radio" name="size" checked value="15" />Large</li>
              <li><input type="radio" name="size" value="18" />X-Large</li>
            </ul>


            <a class="btnStyle listOver">Done</a>
	    <h4 class="totalSize" id="totalSize7">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog7">
              Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal7">
              Total: $<span>0</span>
            </h4>
          </div>
        </div>
		<!------------------>
		
        <!-- Recipe 8 -->
        <div class="recipe">
          <p class="name">Zesty Italian Trio Pizza</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/pizzas/zesty-italian-trio-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartItalianPizza"
            >Add to Cart</a
          >
          <p class="price"><span>$9</span></p>
          <div id="checkOrderItalianPizza" title="Zesty Italian Trio Pizza">

	    <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize8">
              <li><input type="radio" name="size" value="9" />Small</li>
              <li><input type="radio" name="size" value="12" />Medium</li>
              <li><input type="radio" name="size" checked value="15" />Large</li>
              <li><input type="radio" name="size" value="18" />X-Large</li>
            </ul>


            <a class="btnStyle listOver">Done</a>
	    <h4 class="totalSize" id="totalSize8">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog8">
              Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal8">
              Total: $<span>0</span>
            </h4>
          </div>
        </div>
		
		<!------------------>
	  
      <div class="recipe-menu">     
        <!-- Recipe 9 -->
        <div class="recipe">
          <p class="name">Bacon Jalapeno Popper Rolls</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/sides/Bacon-Jalapeno-Popper-Rolls-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartPopper"
            >Add to Cart</a>

		  <p class="price"><span>$6</span></p>
          <div id="checkOrderPopper" title="Bacon Jalapeno Popper Rolls">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize9">
              <li><input type="radio" name="size" value="6" />3 Pieces</li>
              <li><input type="radio" name="size" value="9" />5 Pieces</li>
              <li><input type="radio" name="size" checked value="15" />10 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize9">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog9">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal9">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>
		
		<!-- Recipe 10 -->
        <div class="recipe">
          <p class="name">Jalapeno Popper Rolls</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/jalapeno-poppers/jalapeno-poppers-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartJalapeno"
            >Add to Cart</a>

		  <p class="price"><span>$6</span></p>
          <div id="checkOrderJalapenoPopper" title="Jalapeno Popper Rolls">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize10">
              <li><input type="radio" name="size" value="6" />3 Pieces</li>
              <li><input type="radio" name="size" value="9" />5 Pieces</li>
              <li><input type="radio" name="size" checked value="15" />10 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize10">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog10">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal10">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

		<!-- Recipe 11 -->
        <div class="recipe">
          <p class="name">Garlic Knotts</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/sides/garlic-knots-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartGarlicKnotts"
            >Add to Cart</a>

		  <p class="price"><span>$6</span></p>
          <div id="checkOrderGarlicKnotts" title="Garlic Knotts">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize11">
              <li><input type="radio" name="size" value="6" />3 Pieces</li>
              <li><input type="radio" name="size" value="9" />5 Pieces</li>
              <li><input type="radio" name="size" checked value="15" />10 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize11">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog11">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal11">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

        <!-- Recipe 12 -->
        <div class="recipe">
          <p class="name">Garlic Parmesan Breadsticks</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/sides/garlic-parm-breadsticks-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartParmesan"
            >Add to Cart</a>

		  <p class="price"><span>$6</span></p>
          <div id="checkOrderParmesan" title="Garlic Parmesan Breadsticks">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize12">
              <li><input type="radio" name="size" value="6" />3 Pieces</li>
              <li><input type="radio" name="size" value="9" />5 Pieces</li>
              <li><input type="radio" name="size" checked value="15" />10 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize12">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog12">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal12">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>
		
		<!-- Recipe 13 -->
        <div class="recipe">
          <p class="name">Cheesesticks</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/sides/cheese-sticks-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartCheesesticks"
            >Add to Cart</a>

		  <p class="price"><span>$6</span></p>
          <div id="checkOrderCheesesticks" title="Cheesesticks">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize13">
              <li><input type="radio" name="size" value="6" />3 Pieces</li>
              <li><input type="radio" name="size" value="9" />5 Pieces</li>
              <li><input type="radio" name="size" checked value="15" />10 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize13">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog13">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal13">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

		<!-- Recipe 14 -->
        <div class="recipe">
          <p class="name">Original Breadsticks</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/sides/original-breadsticks-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartOriginal"
            >Add to Cart</a>

		  <p class="price"><span>$6</span></p>
          <div id="checkOrderOriginal" title="Original Breadsticks">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize14">
              <li><input type="radio" name="size" value="6" />3 Pieces</li>
              <li><input type="radio" name="size" value="9" />5 Pieces</li>
              <li><input type="radio" name="size" checked value="15" />10 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize14">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog14">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal14">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

		<!------------------>

	  
      <div class="recipe-menu">     
        <!-- Recipe 15 -->
        <div class="recipe">
          <p class="name">Unsauced Roasted Wings</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/sides/unsauced-roasted-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartRoasted"
            >Add to Cart</a>

		  <p class="price"><span>$9</span></p>
          <div id="checkOrderRoasted" title="Unsauced Roasted Wings">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize15">
              <li><input type="radio" name="size" value="9" />3 Pieces</li>
              <li><input type="radio" name="size" value="12" />5 Pieces</li>
              <li><input type="radio" name="size" checked value="15" />10 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize15">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog15">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal15">
              Total: $<span></span>
            </h4>
	
          </div>
        </div>
		
		<!-- Recipe 16 -->
        <div class="recipe">
          <p class="name">Buffalo Wings</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/wings/new-buffalo-wings-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartBuffalo"
            >Add to Cart</a>

		  <p class="price"><span>$9</span></p>
          <div id="checkOrderBuffalo" title="Buffalo Wings">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize16">
              <li><input type="radio" name="size" value="9" />3 Pieces</li>
              <li><input type="radio" name="size" value="12" />5 Pieces</li>
              <li><input type="radio" name="size" checked value="15" />10 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize16">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog16">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal16">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

		<!-- Recipe 17 -->
        <div class="recipe">
          <p class="name">BBQ Wings</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/wings/new-bbq-wings-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartBBQWings"
            >Add to Cart</a>

		  <p class="price"><span>$9</span></p>
          <div id="checkOrderBBQWings" title="BBQ Wings">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize17">
              <li><input type="radio" name="size" value="9" />3 Pieces</li>
              <li><input type="radio" name="size" value="12" />5 Pieces</li>
              <li><input type="radio" name="size" checked value="15" />10 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize17">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog17">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal17">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

 		<!-- Recipe 18 -->
        <div class="recipe">
          <p class="name">Honey Chipotle Wings</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/wings/new-honey-chip-wings-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartChipotle"
            >Add to Cart</a>

		  <p class="price"><span>$9</span></p>
          <div id="checkOrderChipotle" title="Honey Chipotle Wings">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize18">
              <li><input type="radio" name="size" value="9" />3 Pieces</li>
              <li><input type="radio" name="size" value="12" />5 Pieces</li>
              <li><input type="radio" name="size" checked value="15" />10 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize18">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog18">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal18">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

		<!------------------>
	  
      <div class="recipe-menu">     
        <!-- Recipe 19 -->
        <div class="recipe">
          <p class="name">Cinnamon Pull Aparts</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/desserts/cinn-pullaparts-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartCinnamon"
            >Add to Cart</a>

		  <p class="price"><span>$4</span></p>
          <div id="checkOrderCinnamon" title="Cinnamon Pull Aparts">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize19">
              <li><input type="radio" name="size" value="4" />1 Piece</li>
              <li><input type="radio" name="size" value="7" />2 Pieces</li>
              <li><input type="radio" name="size" checked value="11" />3 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize19">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog19">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal19">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>
		
		<!-- Recipe 20 -->
        <div class="recipe">
          <p class="name">Chocolate Chip Cookie</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/desserts/cookie-slice-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartCookie"
            >Add to Cart</a>

		  <p class="price"><span>$4</span></p>
          <div id="checkOrderCookie" title="Chocolate Chip Cookie">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize20">
              <li><input type="radio" name="size" value="4" />1 Piece</li>
              <li><input type="radio" name="size" value="7" />2 Pieces</li>
              <li><input type="radio" name="size" checked value="11" />3 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize20">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog20">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal20">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

		<!-- Recipe 21 -->
        <div class="recipe">
          <p class="name">Double Chocolate Chip Brownie</p>
          <img
            src="https://www.papajohns.com/static-assets/a/images/web/product/desserts/brownie-slate-compressed.jpg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartBrownie"
            >Add to Cart</a>

		  <p class="price"><span>$4</span></p>
          <div id="checkOrderBrownie" title="Double Chocolate Chip Brownie">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize21">
              <li><input type="radio" name="size" value="4" />1 Piece</li>
              <li><input type="radio" name="size" value="7" />2 Pieces</li>
              <li><input type="radio" name="size" checked value="11" />3 Pieces</li>              
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize21">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog21">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal21">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>

		<!------------------>
	  
      <div class="recipe-menu">     
        <!-- Recipe 22 -->
        <div class="recipe">
          <p class="name">Lemonade</p>
          <img
            src="https://i5.walmartimages.com/asr/dae9a677-ff4d-4a1e-8f34-bf00760aea27_1.d52b0dcbfa6c09c14a99559b5b910b3c.jpeg"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartMinuteMaid"
            >Add to Cart</a>

		  <p class="price"><span>$3</span></p>
          <div id="checkOrderMinuteMaid" title="MinuteMaid Lemonade">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize22">
              <li><input type="radio" name="size" value="3" />Small</li>
              <li><input type="radio" name="size" value="6" />Medium</li>
              <li><input type="radio" name="size" checked value="9" />Large</li>             
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize22">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog22">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal22">
              Total: $<span></span>
            </h4>
	
          </div>
        </div>	
		
       <!-- Recipe 23 -->
        <div class="recipe">
          <p class="name">Pepsi</p>
          <img
            src="https://www.kroger.com/product/images/large/front/0001200000230"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartPepsi"
            >Add to Cart</a>

		  <p class="price"><span>$3</span></p>
          <div id="checkOrderPepsi" title="Pepsi">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize23">
              <li><input type="radio" name="size" value="3" />Small</li>
              <li><input type="radio" name="size" value="6" />Medium</li>
              <li><input type="radio" name="size" checked value="9" />Large</li>             
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize23">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog23">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal23">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>	

       <!-- Recipe 24 -->
        <div class="recipe">
          <p class="name">Mountain Dew</p>
          <img
            src="https://images.heb.com/is/image/HEBGrocery/000026103?fit=constrain,1&wid=800&hei=800&fmt=jpg&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartMountainDew"
            >Add to Cart</a>

		  <p class="price"><span>$3</span></p>
          <div id="checkOrderMountainDew" title="Mountain Dew">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize24">
              <li><input type="radio" name="size" value="3" />Small</li>
              <li><input type="radio" name="size" value="6" />Medium</li>
              <li><input type="radio" name="size" checked value="9" />Large</li>             
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize24">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog24">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal24">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>	

       <!-- Recipe 25 -->
        <div class="recipe">
          <p class="name">Diet Coke</p>
          <img
            src="https://images.heb.com/is/image/HEBGrocery/000145353?fit=constrain,1&wid=800&hei=800&fmt=jpg&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartCoke"
            >Add to Cart</a>

		  <p class="price"><span>$3</span></p>
          <div id="checkOrderCoke" title="Diet Coke">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize25">
              <li><input type="radio" name="size" value="3" />Small</li>
              <li><input type="radio" name="size" value="6" />Medium</li>
              <li><input type="radio" name="size" checked value="9" />Large</li>             
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize25">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog25">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal25">
              Total: $<span>0</span>
            </h4>
	
          </div>
        </div>			

       <!-- Recipe 26 -->
        <div class="recipe">
          <p class="name">Aquafina</p>
          <img
            src="https://images.heb.com/is/image/HEBGrocery/000026089?fit=constrain,1&wid=800&hei=800&fmt=jpg&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0"
          />
          <a class="btnStyle3 btnStyle addToCart" id="addToCartAquafina"
            >Add to Cart</a>

		  <p class="price"><span>$3</span></p>
          <div id="checkOrderAquafina" title="Aquafina">
            <h3 class="listHeading">Size:</h3>
            <ul class="listOfIngredients" id="recipeSize26">
              <li><input type="radio" name="size" value="3" />Small</li>
              <li><input type="radio" name="size" value="6" />Medium</li>
              <li><input type="radio" name="size" checked value="9" />Large</li>             
            </ul>

            <a class="btnStyle listOver">Done</a>

            <h4 class="totalSize" id="totalSize26">
              Size Total: $<span>0</span>
            </h4>

            <h4 class="totalDialog" id="totalDialog26">
              Toppings Total: $<span>0</span>
            </h4>

	   <h4 class="totalFinal" id="totalFinal26">
              Total: $<span>0</span>
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
      <h1>Thank you for the order.</h1>
      <h3>We will have it delivered soon!</h3>
    </div>

    <script src="order.js" type="module"></script>
  </body>
</html>
