$.fn.imgscroll = function(e) {
    var t = {
        speed: 40,
        amount: 0,
        width: 1,
        dir: "left"
    };
    return e = $.extend(t, e),
    this.each(function() {
        function t() { (o += e.width) > i && (o = 0, n.parent().css("left" == e.dir ? {
                left: -o
            }: {
                top: -o
            }), o += e.width),
            n.parent().animate("left" == e.dir ? {
                left: -o
            }: {
                top: -o
            },
            e.amount)
        }
        var n = $("li", this);
        n.parent().parent().css({
            overflow: "hidden",
            position: "relative"
        }),
        n.parent().css({
            margin: "0",
            padding: "0",
            overflow: "hidden",
            position: "relative",
            "list-style": "none"
        }),
        n.css({
            position: "relative",
            overflow: "hidden"
        }),
        "left" == e.dir && n.css({
            float: "left"
        });
        for (var i = 0,
        r = 0; r < n.size(); r++) i += "left" == e.dir ? n.eq(r).outerWidth(!0) : n.eq(r).outerHeight(!0);
        "left" == e.dir && n.parent().css({
            width: 3 * i + "px"
        }),
        n.parent().empty().append(n.clone()).append(n.clone()).append(n.clone()),
        n = $("li", this);
        var o = 0,
        a = setInterval(function() {
            t()
        },
        e.speed);
        n.parent().hover(function() {
            clearInterval(a)
        },
        function() {
            clearInterval(a),
            a = setInterval(function() {
                t()
            },
            e.speed)
        })
    })
}
$(document).ready(function() {
    $(".dowebok1").imgscroll({
        speed: 40,
        amount: 0,
        width: 1,
        dir: "left"
    })
})

$(document).ready(function() {
    $(".dowebok2").imgscroll({
        speed: 40,
        amount: 0,
        width: 1,
        dir: "left"
    })
})