!function (e) {
    "function" == typeof define && define.amd ? define(["jquery"], e) : e(window.jQuery || window.$)
}(function (e) {
    var t, i = {
            className: "autosizejs",
            append: "",
            callback: !1,
            resizeDelay: 10
        },
        n = '<textarea style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',
        a = ["fontFamily", "fontSize", "fontWeight", "fontStyle", "letterSpacing", "textTransform", "wordSpacing", "textIndent"],
        s = e(n).data("autosize", !0)[0];
    s.style.lineHeight = "99px", "99px" === e(s).css("lineHeight") && a.push("lineHeight"), s.style.lineHeight = "", e.fn.autosize = function (n) {
        return n = e.extend({}, i, n || {}), s.parentNode !== document.body && e(document.body).append(s), this.each(function () {
            function i() {
                var t, i;
                "getComputedStyle" in window ? (t = window.getComputedStyle(h), i = h.getBoundingClientRect().width, e.each(["paddingLeft", "paddingRight", "borderLeftWidth", "borderRightWidth"], function (e, n) {
                    i -= parseInt(t[n], 10)
                }), s.style.width = i + "px") : s.style.width = Math.max(p.width(), 0) + "px"
            }

            function o() {
                var o = {};
                if (t = h, s.className = n.className, c = parseInt(p.css("maxHeight"), 10), e.each(a, function (e, t) {
                    o[t] = p.css(t)
                }), e(s).css(o), i(), window.chrome && "setSelectionRange" in h) {
                    var r = h.selectionStart;
                    h.value += " ", h.value = h.value.slice(0, -1), h.setSelectionRange(r, r)
                }
            }

            function r() {
                var e, a;
                t !== h ? o() : i(), s.value = h.value + n.append, s.style.overflowY = h.style.overflowY, a = parseInt(h.style.height, 10), s.scrollTop = 0, s.scrollTop = 9e4, e = s.scrollTop, c && e > c ? (h.style.overflowY = "scroll", e = c) : (h.style.overflowY = "hidden", u > e && (e = u)), e += f, a !== e && (h.style.height = e + "px", m && n.callback.call(h, h))
            }

            function l() {
                clearTimeout(d), d = setTimeout(function () {
                    var e = p.width();
                    e !== v && (v = e, r())
                }, parseInt(n.resizeDelay, 10))
            }

            var c, u, d, h = this,
                p = e(h),
                f = 0,
                m = e.isFunction(n.callback),
                g = {
                    height: h.style.height,
                    overflow: h.style.overflow,
                    overflowY: h.style.overflowY,
                    wordWrap: h.style.wordWrap,
                    resize: h.style.resize
                },
                v = p.width();
            p.data("autosize") || (p.data("autosize", !0), ("border-box" === p.css("box-sizing") || "border-box" === p.css("-moz-box-sizing") || "border-box" === p.css("-webkit-box-sizing")) && (f = p.outerHeight() - p.height()), u = Math.max(parseInt(p.css("minHeight"), 10) - f || 0, p.height()), p.css({
                overflow: "hidden",
                overflowY: "hidden",
                wordWrap: "break-word",
                resize: "none" === p.css("resize") || "vertical" === p.css("resize") ? "none" : "horizontal"
            }), "onpropertychange" in h ? "oninput" in h ? p.on("input.autosize keyup.autosize", r) : p.on("propertychange.autosize", function () {
                "value" === event.propertyName && r()
            }) : p.on("input.autosize", r), n.resizeDelay !== !1 && e(window).on("resize.autosize", l), p.on("autosize.resize", r), p.on("autosize.resizeIncludeStyle", function () {
                t = null, r()
            }), p.on("autosize.destroy", function () {
                t = null, clearTimeout(d), e(window).off("resize", l), p.off("autosize").off(".autosize").css(g).removeData("autosize")
            }), r())
        })
    }
});