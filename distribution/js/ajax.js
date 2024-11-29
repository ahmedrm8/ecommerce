$("form").submit(function (e) {
  e.preventDefault();
  var data = {};
  var firstName = $("#firstName").val();
  var lastName = $("#lastName").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var msg = $("#message").val();
  $("form input, textarea").each(function (index, item) {
    if ($(item).val() != "") {
      data[$(item).attr("id")] = $(item).val();
    } else {
      $(item).val("can't be empty");
    }
  });
  if (firstName && lastName && email && phone && msg) {
    $.post("functions/sendMsg.php", data, function (data) {
      $(".newData").append(data);
      $("form .input").val("");
    });
  }
});
// $.post(
//   "functions/sendMsg.php",
//   {
//     firstName: $("#firstName").val(),
//     lastName: $("#lastName").val(),
//     email: $("#email").val(),
//     phone: $("#phone").val(),
//     msg: $("#message").val(),
//   },
//   function (data) {
//     $(".newData").append(data);
//     console.log(data);
//     $("form input").val("");
//     $("form textarea").val("");
//   }
// );
