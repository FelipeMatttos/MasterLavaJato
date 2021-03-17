function erro(mensagem, div) {
  $(div).animate(
    {
      height: "+=72px"
    },
    1000
  );
  $(
    '<div class="alert alert-danger">' +
    '<button type="button" class="close" data-dismiss="alert">' +
    "&times;</button>" +
    mensagem +
    "</div>"
  )
    .hide()
    .appendTo(div)
    .fadeIn(1000);

  $(".alert")
    .delay(1000)
    .fadeOut("normal", function () {
      $(this).remove();
    });

  $(div)
    .delay(1000)
    .animate(
      {
        height: "-=72px"
      },
      1000
    );
}
function sucesso(mensagem, div) {

  $(div).animate(
    {
      height: "+=72px"
    },
    1000
  );
  $(
    '<div class="alert alert-success">' +
    '<button type="button" class="close" data-dismiss="alert">' +
    "&times;</button>" +
    mensagem +
    "</div>"
  )
    .hide()
    .appendTo(div)
    .fadeIn(1000);

  $(".alert")
    .delay(1000)
    .fadeOut("normal", function () {
      $(this).remove();
    });

  $(div)
    .delay(1000)
    .animate(
      {
        height: "-=72px"
      },
      1000
    );
}