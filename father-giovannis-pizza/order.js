// POPOUT
function openSide() {
  document.getElementById("sidePop").style.width = "250px";
  document.getElementById("inactive").style.width = "100%";
}
function closeSide() {
  document.getElementById("sidePop").style.width = "0";
  document.getElementById("inactive").style.width = "0";
}

// ORDER
$(document).ready(function() {

	var numOfOrders = 0;
	$(".num").text(numOfOrders);

	// hide dialogs on start
	$("#thanksMessage, #checkOrderCustom, #checkOrderCheesePizza, #checkOrderPepperoniPizza, #checkOrderSausagePizza, #checkOrderAlfredoPizza, #checkOrderTuscanPizza, #checkOrderHawaiianPizza, #checkOrderItalianPizza, #checkOrderPopper, #checkOrderJalapenoPopper, #checkOrderGarlicKnotts, #checkOrderParmesan, #checkOrderCheesesticks, #checkOrderOriginal, #checkOrderRoasted, #checkOrderBuffalo, #checkOrderBBQWings, #checkOrderChipotle, #checkOrderCinnamon, #checkOrderCookie, #checkOrderBrownie, #checkOrderMinuteMaid, #checkOrderPepsi, #checkOrderMountainDew, #checkOrderCoke, #checkOrderAquafina, #finishOrderDialog").hide();

	// open dialog on click
	$("#addToCartCustom").on("click", function () {
		$("#checkOrderCustom").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})

	$("#addToCartCheesePizza").on("click", function () {
		$("#checkOrderCheesePizza").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})

	$("#addToCartPepperoniPizza").on("click", function () {
		$("#checkOrderPepperoniPizza").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})

	$("#addToCartSausagePizza").on("click", function () {
		$("#checkOrderSausagePizza").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})

	$("#addToCartAlfredoPizza").on("click", function () {
		$("#checkOrderAlfredoPizza").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})

	$("#addToCartTuscanPizza").on("click", function () {
		$("#checkOrderTuscanPizza").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})
	
	$("#addToCartHawaiianPizza").on("click", function () {
		$("#checkOrderHawaiianPizza").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})
	
	$("#addToCartItalianPizza").on("click", function () {
		$("#checkOrderItalianPizza").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})
	
	$("#addToCartPopper").on("click", function () {
		$("#checkOrderPopper").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})
	
	$("#addToCartJalapeno").on("click", function () {
		$("#checkOrderJalapenoPopper").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})

	$("#addToCartGarlicKnotts").on("click", function () {
		$("#checkOrderGarlicKnotts").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})

	$("#addToCartParmesan").on("click", function () {
		$("#checkOrderParmesan").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})

	$("#addToCartCheesesticks").on("click", function () {
		$("#checkOrderCheesesticks").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})

	$("#addToCartOriginal").on("click", function () {
		$("#checkOrderOriginal").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})	
	
	$("#addToCartRoasted").on("click", function () {
		$("#checkOrderRoasted").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})	

	$("#addToCartBuffalo").on("click", function () {
		$("#checkOrderBuffalo").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})	

	$("#addToCartBBQWings").on("click", function () {
		$("#checkOrderBBQWings").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})	
	
	$("#addToCartChipotle").on("click", function () {
		$("#checkOrderChipotle").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})			

	$("#addToCartCinnamon").on("click", function () {
		$("#checkOrderCinnamon").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})		
	
	$("#addToCartCookie").on("click", function () {
		$("#checkOrderCookie").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})		

	$("#addToCartBrownie").on("click", function () {
		$("#checkOrderBrownie").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})		

	$("#addToCartMinuteMaid").on("click", function () {
		$("#checkOrderMinuteMaid").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})		

	$("#addToCartPepsi").on("click", function () {
		$("#checkOrderPepsi").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})		

	$("#addToCartMountainDew").on("click", function () {
		$("#checkOrderMountainDew").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})		

	$("#addToCartCoke").on("click", function () {
		$("#checkOrderCoke").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})		

	$("#addToCartAquafina").on("click", function () {
		$("#checkOrderAquafina").dialog({
				hide: "blind",
            	show : "blind",
            	width: "400px",
              closeText: "X"});
	})			

	// increase/decrease the price of order if an item is added/removed
	function checkboxChange(x) {
		var priceDialog = 0;
		var final = 0;

		$("#recipe"+x).children("li").children("input").each(function () {
			if($(this).is(":checked")){
				priceDialog+=1;
			}
				
				$("#totalDialog"+x+">span").text(priceDialog);
				final = Number($("#totalSize"+x+">span").text()) + priceDialog;				
				console.log(final);
				$("#totalFinal"+x+">span").text(final);
			$(this).change(function () {
				if ($(this).is(":checked")) {
					priceDialog += 1;					
					$("#totalDialog"+x+">span").text(priceDialog);
					final = Number($("#totalSize"+x+">span").text()) + priceDialog;	
					console.log(final);
					$("#totalFinal"+x+">span").text(final);
				}else{
					priceDialog -= 1;
					$("#totalDialog"+x+">span").text(priceDialog);
					final = Number($("#totalSize"+x+">span").text()) + priceDialog;	
					console.log(final);
					$("#totalFinal"+x+">span").text(final);

				}
			})
		});
	}

	function radioChange(x) {
		var priceDialog = 0;
		var final = 0;

		$("#recipeSize"+x).children("li").children("input").each(function () {
			if($(this).is(":checked")){
				priceDialog = Number($(this).val());				
			}
			$("#totalSize"+x+">span").text(priceDialog);	
			final = Number($("#totalDialog"+x+">span").text()) + priceDialog;
			$("#totalFinal"+x+">span").text(final);

			
			$(this).change(function () {
				if ($(this).is(":checked")) {
					priceDialog = Number($(this).val());					
					$("#totalSize"+x+">span").text(priceDialog);	
					final = Number($("#totalDialog"+x+">span").text()) + priceDialog;
					$("#totalFinal"+x+">span").text(final);

				}
			})					
		});
	}

	$('#recipeSize1').children('li').click(radioChange(1));
	$('#recipeSize2').children('li').click(radioChange(2));
	$('#recipeSize3').children('li').click(radioChange(3));
	$('#recipeSize4').children('li').click(radioChange(4));
	$('#recipeSize5').children('li').click(radioChange(5));
	$('#recipeSize6').children('li').click(radioChange(6));
	$('#recipeSize7').children('li').click(radioChange(7));
	$('#recipeSize8').children('li').click(radioChange(8));
	$('#recipeSize9').children('li').click(radioChange(9));
	$('#recipeSize10').children('li').click(radioChange(10));
	$('#recipeSize11').children('li').click(radioChange(11));
	$('#recipeSize12').children('li').click(radioChange(12));
	$('#recipeSize13').children('li').click(radioChange(13));
	$('#recipeSize14').children('li').click(radioChange(14));
	$('#recipeSize15').children('li').click(radioChange(15));
	$('#recipeSize16').children('li').click(radioChange(16));
	$('#recipeSize17').children('li').click(radioChange(17));
	$('#recipeSize18').children('li').click(radioChange(18));	
	$('#recipeSize19').children('li').click(radioChange(19));
	$('#recipeSize20').children('li').click(radioChange(20));
	$('#recipeSize21').children('li').click(radioChange(21));
	$('#recipeSize22').children('li').click(radioChange(22));
	$('#recipeSize23').children('li').click(radioChange(23));
	$('#recipeSize24').children('li').click(radioChange(24));
	$('#recipeSize25').children('li').click(radioChange(25));
	$('#recipeSize26').children('li').click(radioChange(26));	

	$('#recipe1').children('li').click(checkboxChange(1));
	$('#recipe2').children('li').click(checkboxChange(2));
	$('#recipe3').children('li').click(checkboxChange(3));
	$('#recipe4').children('li').click(checkboxChange(4));
	$('#recipe5').children('li').click(checkboxChange(5));
	$('#recipe6').children('li').click(checkboxChange(6));
	$('#recipe7').children('li').click(checkboxChange(7));	
	$('#recipe8').children('li').click(checkboxChange(8));
	$('#recipe9').children('li').click(checkboxChange(9));
	$('#recipe10').children('li').click(checkboxChange(10));
	$('#recipe11').children('li').click(checkboxChange(11));
	$('#recipe12').children('li').click(checkboxChange(12));
	$('#recipe13').children('li').click(checkboxChange(13));
	$('#recipe14').children('li').click(checkboxChange(14));
	$('#recipe15').children('li').click(checkboxChange(15));
	$('#recipe16').children('li').click(checkboxChange(16));
	$('#recipe17').children('li').click(checkboxChange(17));
	$('#recipe18').children('li').click(checkboxChange(18));
	$('#recipe19').children('li').click(checkboxChange(19));
	$('#recipe20').children('li').click(checkboxChange(20));
	$('#recipe21').children('li').click(checkboxChange(21));
	$('#recipe22').children('li').click(checkboxChange(22));
	$('#recipe23').children('li').click(checkboxChange(23));
	$('#recipe24').children('li').click(checkboxChange(24));
	$('#recipe25').children('li').click(checkboxChange(25));
	$('#recipe26').children('li').click(checkboxChange(26));	

	$(".listOver").on("click", function () {
		var orderName = '<h3 class="orderName"><span>' + $(this).parent().siblings(".ui-dialog-titlebar").children("span").text() + '</span><a class="delBtn">&#10008;</a>' +'</h3>';
		var orderIngredients = '<ul class="orderIngredients"></ul>';
		var orderPrice = '<h3 class="orderPrice"><span>' + $(this).parent().children(".totalFinal").children("span").text() + '</span>$<h3>'
		var horisontalLine = '<hr>';
		$(".cart").children("#listOfOrders").append("<li>" + orderName + orderIngredients + orderPrice + horisontalLine + "</li>");

		$(this).parent().children("ul").children().children("input:checked").each(function () {
			var selectedIngredient = $(this).parent().text();
			$(".orderIngredients").last().append("<li>" + selectedIngredient + "</li>");
		})

		// opens the cart side menu
		if ($('#cartToggle').prop('checked')) {
			$("#cartToggle").prop("checked", true);
		}else{
			$("#cartToggle").prop("checked", true);
		}

		$(this).parent(".ui-dialog-content").dialog("close");

		numOfOrders = $("#listOfOrders").children().length;
		$(".num").text(numOfOrders);

		// display total price in cart orders
		var totalOrderPrice = 0;
		$("#listOfOrders").children("li").children(".orderPrice").children("span").each(function () {
			var price = parseFloat($(this).text());
			totalOrderPrice += price;
			$(".cart > h3 > span").text(totalOrderPrice + "$");
		});

		// remove order from cart
		$(".delBtn").on("click", function () {
			var removePrice = $(this).parent().parent().children(".orderPrice").children("span").text();
			totalOrderPrice -= removePrice;
			$(".cart > h3 > span").text(totalOrderPrice + "$");

			$(this).parents("li").remove();
			numOfOrders = $("#listOfOrders").children().length;
			$(".num").text(numOfOrders);
		})
	}); // List over (done button)

	$(".finishOrder").on("click", function () {
     $("#finalOrderList > ol").children().remove();
		$(".orderName").children("span").each(function(){
			var finalOrder = '<li>' + $(this).text() + '</li>';
			$("#finalOrderList > ol").append(finalOrder);
		})

		$("#finishOrderDialog").dialog({
			hide: "blind",
	    	show : "blind",
	    	width: "500px",
        closeText: "X"
	    });
	})

	$(".order").on("click", function () {
		var name = $("#buyerName").val();
		var number = $("#buyerNumber").val();
		var address = $("#buyerAddress").val();

		if (name != "" && number != "" && address != "") {
			$("#finishOrderDialog").dialog("close");
			$("#buyerInfo").children("p").remove();
			$("#thanksMessage").dialog({
				hide: "blind",
		    	show : "blind",
		    	width: "400px"
		    });
		    setTimeout(function(){
		    	$("#thanksMessage").dialog("close");
		    }, 3000);
		}else{
			$("#buyerInfo").append('<p>Fill up all the inputs</p>');
		}
	})

})
