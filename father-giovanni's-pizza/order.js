// ORDER
$(document).ready(function () {
  $("a").click(function (event) {
    event.preventDefault();
  });

  var numOfOrders = 0;
  $(".num").text(numOfOrders);

  // hide dialogs on start
  $(
    "#thanksMessage, #checkOrderCustom, #checkOrderMacaroni, #checkOrderPizza, #checkOrderSalad, #checkOrderSpaghetti, #checkOrderRisotto, #finishOrderDialog"
  ).hide();

  // open dialog on click
  $("#addToCartCustom").on("click", function () {
    $("#checkOrderCustom").dialog({
      hide: "blind",
      show: "blind",
      width: "400px",
      closeText: "X",
    });
  });

  $("#addToCartMacaroni").on("click", function () {
    $("#checkOrderMacaroni").dialog({
      hide: "blind",
      show: "blind",
      width: "400px",
      closeText: "X",
    });
  });

  $("#addToCartPizza").on("click", function () {
    $("#checkOrderPizza").dialog({
      hide: "blind",
      show: "blind",
      width: "400px",
      closeText: "X",
    });
  });

  $("#addToCartSalad").on("click", function () {
    $("#checkOrderSalad").dialog({
      hide: "blind",
      show: "blind",
      width: "400px",
      closeText: "X",
    });
  });

  $("#addToCartSpaghetti").on("click", function () {
    $("#checkOrderSpaghetti").dialog({
      hide: "blind",
      show: "blind",
      width: "400px",
      closeText: "X",
    });
  });

  $("#addToCartRisotto").on("click", function () {
    $("#checkOrderRisotto").dialog({
      hide: "blind",
      show: "blind",
      width: "400px",
      closeText: "X",
    });
  });

  // increase/decrease the price of order if an item is added/removed
  function checkboxChange(x) {
    var priceDialog = 0;
    var final = 0;

    $("#recipe" + x)
      .children("li")
      .children("input")
      .each(function () {
        if ($(this).is(":checked")) {
          priceDialog += 1;
        }
        $("#totalDialog" + x + ">span").text(priceDialog);
        final = Number($("#totalSize" + x + ">span").text()) + priceDialog;
        $("#totalFinal" + x + ">span").text(final);
        $(this).change(function () {
          if ($(this).is(":checked")) {
            priceDialog += 1;
            console.log(priceDialog);
            $("#totalDialog" + x + ">span").text(priceDialog);
            final = Number($("#totalSize" + x + ">span").text()) + priceDialog;
            $("#totalFinal" + x + ">span").text(final);
          } else {
            priceDialog -= 1;
            $("#totalDialog" + x + ">span").text(priceDialog);
            final = Number($("#totalSize" + x + ">span").text()) + priceDialog;
            $("#totalFinal" + x + ">span").text(final);
          }
        });
      });
  }

  function radioChange(x) {
    var priceDialog = 0;
    var final = 0;

    $("#recipeSize" + x)
      .children("li")
      .children("input")
      .each(function () {
        if ($(this).is(":checked")) {
          priceDialog = Number($(this).val());
          console.log(priceDialog);
        }
        $("#totalSize" + x + ">span").text(priceDialog);
        final = Number($("#totalDialog" + x + ">span").text()) + priceDialog;
        $("#totalFinal" + x + ">span").text(final);

        $(this).change(function () {
          if ($(this).is(":checked")) {
            priceDialog = Number($(this).val());
            console.log(priceDialog);
            $("#totalSize" + x + ">span").text(priceDialog);
            final =
              Number($("#totalDialog" + x + ">span").text()) + priceDialog;
            $("#totalFinal" + x + ">span").text(final);
          }
        });
      });
  }

  $("#recipeSize1").children("li").click(radioChange(1));
  $("#recipeSize2").children("li").click(radioChange(2));
  $("#recipeSize3").children("li").click(radioChange(3));
  $("#recipeSize4").children("li").click(radioChange(4));
  $("#recipeSize5").children("li").click(radioChange(5));
  $("#recipeSize6").children("li").click(radioChange(6));

  $("#recipe1").children("li").click(checkboxChange(1));
  $("#recipe2").children("li").click(checkboxChange(2));
  $("#recipe3").children("li").click(checkboxChange(3));
  $("#recipe3").children("li").click(checkboxChange(4));
  $("#recipe3").children("li").click(checkboxChange(5));
  $("#recipe3").children("li").click(checkboxChange(6));

  $(".listOver").on("click", function () {
    var orderName =
      '<h3 class="orderName"><span>' +
      $(this).parent().siblings(".ui-dialog-titlebar").children("span").text() +
      '</span><a class="delBtn">&#10008;</a>' +
      "</h3>";
    var orderIngredients = '<ul class="orderIngredients"></ul>';
    var orderPrice =
      '<h3 class="orderPrice"><span>' +
      $(this).parent().children(".totalFinal").children("span").text() +
      "</span>$<h3>";
    var horisontalLine = "<hr>";
    $(".cart")
      .children("#listOfOrders")
      .append(
        "<li>" +
          orderName +
          orderIngredients +
          orderPrice +
          horisontalLine +
          "</li>"
      );

    $(this)
      .parent()
      .children("ul")
      .children()
      .children("input:checked")
      .each(function () {
        var selectedIngredient = $(this).parent().text();
        $(".orderIngredients")
          .last()
          .append("<li>" + selectedIngredient + "</li>");
      });

    // opens the cart side menu
    if ($("#cartToggle").prop("checked")) {
      $("#cartToggle").prop("checked", true);
    } else {
      $("#cartToggle").prop("checked", true);
    }

    $(this).parent(".ui-dialog-content").dialog("close");

    numOfOrders = $("#listOfOrders").children().length;
    $(".num").text(numOfOrders);

    // display total price in cart orders
    var totalOrderPrice = 0;
    $("#listOfOrders")
      .children("li")
      .children(".orderPrice")
      .children("span")
      .each(function () {
        var price = parseFloat($(this).text());
        totalOrderPrice += price;
        $(".cart > h3 > span").text(totalOrderPrice + "$");
      });

    // remove order from cart
    $(".delBtn").on("click", function () {
      var removePrice = $(this)
        .parent()
        .parent()
        .children(".orderPrice")
        .children("span")
        .text();
      totalOrderPrice -= removePrice;
      $(".cart > h3 > span").text(totalOrderPrice + "$");

      $(this).parents("li").remove();
      numOfOrders = $("#listOfOrders").children().length;
      $(".num").text(numOfOrders);
    });
  }); // List over (done button)

  $(".finishOrder").on("click", function () {
    $("#finalOrderList > ol").children().remove();
    $(".orderName")
      .children("span")
      .each(function () {
        var finalOrder = "<li>" + $(this).text() + "</li>";
        $("#finalOrderList > ol").append(finalOrder);
      });

    $("#finishOrderDialog").dialog({
      hide: "blind",
      show: "blind",
      width: "500px",
      closeText: "X",
    });
  });

  $(".order").on("click", function () {
    var name = $("#buyerName").val();
    var number = $("#buyerNumber").val();
    var address = $("#buyerAddress").val();

    if (name != "" && number != "" && address != "") {
      $("#finishOrderDialog").dialog("close");
      $("#buyerInfo").children("p").remove();
      $("#thanksMessage").dialog({
        hide: "blind",
        show: "blind",
        width: "400px",
      });
      setTimeout(function () {
        $("#thanksMessage").dialog("close");
      }, 3000);
    } else {
      $("#buyerInfo").append("<p>Fill up all the inputs</p>");
    }
  });
});

function getRandom(length) {
  return Math.floor(
    Math.pow(10, length - 1) + Math.random() * 9 * Math.pow(10, length - 1)
  );
}
