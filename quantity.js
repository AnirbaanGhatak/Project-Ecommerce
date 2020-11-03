let $qty_up = $(".qty .qty-up");
let $qty_down = $(".qty .qty-down");


$qty_up.click(function (e) {
    let $input = $(`.qty_inp[data-id='${$(this).data("id")}']`);
    if ($input.val() >= 1 && $input.val() <= 9) {
        $input.val(function (i, ov) {
            return ++ov;
        })
    }
});

$qty_down.click(function (e) {
    let $input = $(`.qty_inp[data-id='${$(this).data("id")}']`);
    if ($input.val() > 1 && $input.val() <= 10) {
        $input.val(function (i, ov) {
            return --ov;
        })
    }
});