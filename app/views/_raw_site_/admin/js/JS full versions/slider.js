!function (e) {
    var t = function (t, i) {
        this.element = e(t), this.picker = e('<div class="slider"><div class="slider-track"><div class="slider-selection"></div><div class="slider-handle"></div><div class="slider-handle"></div></div><div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div></div>').insertBefore(this.element).append(this.element), this.id = this.element.data("slider-id") || i.id, this.id && (this.picker[0].id = this.id), "undefined" != typeof Modernizr && Modernizr.touch && (this.touchCapable = !0);
        var n = this.element.data("slider-tooltip") || i.tooltip;
        switch (this.tooltip = this.picker.find(".tooltip"), this.tooltipInner = this.tooltip.find("div.tooltip-inner"), this.orientation = this.element.data("slider-orientation") || i.orientation, this.orientation) {
            case "vertical":
                this.picker.addClass("slider-vertical"), this.stylePos = "top", this.mousePos = "pageY", this.sizePos = "offsetHeight", this.tooltip.addClass("right")[0].style.left = "100%";
                break;
            default:
                this.picker.addClass("slider-horizontal").css("width", "100%"), this.orientation = "horizontal", this.stylePos = "left", this.mousePos = "pageX", this.sizePos = "offsetWidth", this.tooltip.addClass("top")[0].style.top = -this.tooltip.outerHeight() - 14 + "px"
        }
        this.min = this.element.data("slider-min") || i.min, this.max = this.element.data("slider-max") || i.max, this.step = this.element.data("slider-step") || i.step, this.value = this.element.data("slider-value") || i.value, this.value[1] && (this.range = !0), this.selection = this.element.data("slider-selection") || i.selection, this.selectionEl = this.picker.find(".slider-selection"), "none" === this.selection && this.selectionEl.addClass("hide"), this.selectionElStyle = this.selectionEl[0].style, this.handle1 = this.picker.find(".slider-handle:first"), this.handle1Stype = this.handle1[0].style, this.handle2 = this.picker.find(".slider-handle:last"), this.handle2Stype = this.handle2[0].style;
        var a = this.element.data("slider-handle") || i.handle;
        switch (a) {
            case "round":
                this.handle1.addClass("round"), this.handle2.addClass("round");
                break;
            case "triangle":
                this.handle1.addClass("triangle"), this.handle2.addClass("triangle")
        }
        this.range ? (this.value[0] = Math.max(this.min, Math.min(this.max, this.value[0])), this.value[1] = Math.max(this.min, Math.min(this.max, this.value[1]))) : (this.value = [Math.max(this.min, Math.min(this.max, this.value))], this.handle2.addClass("hide"), this.value[1] = "after" == this.selection ? this.max : this.min), this.diff = this.max - this.min, this.percentage = [100 * (this.value[0] - this.min) / this.diff, 100 * (this.value[1] - this.min) / this.diff, 100 * this.step / this.diff], this.offset = this.picker.offset(), this.size = this.picker[0][this.sizePos], this.formater = i.formater, this.layout(), this.touchCapable ? this.picker.on({
            touchstart: e.proxy(this.mousedown, this)
        }) : this.picker.on({
            mousedown: e.proxy(this.mousedown, this)
        }), "show" === n ? this.picker.on({
            mouseenter: e.proxy(this.showTooltip, this),
            mouseleave: e.proxy(this.hideTooltip, this)
        }) : this.tooltip.addClass("hide")
    };
    t.prototype = {
        constructor: t,
        over: !1,
        inDrag: !1,
        showTooltip: function () {
            this.tooltip.addClass("in"), this.over = !0
        },
        hideTooltip: function () {
            this.inDrag === !1 && this.tooltip.removeClass("in"), this.over = !1
        },
        layout: function () {
            this.handle1Stype[this.stylePos] = this.percentage[0] + "%", this.handle2Stype[this.stylePos] = this.percentage[1] + "%", "vertical" == this.orientation ? (this.selectionElStyle.top = Math.min(this.percentage[0], this.percentage[1]) + "%", this.selectionElStyle.height = Math.abs(this.percentage[0] - this.percentage[1]) + "%") : (this.selectionElStyle.left = Math.min(this.percentage[0], this.percentage[1]) + "%", this.selectionElStyle.width = Math.abs(this.percentage[0] - this.percentage[1]) + "%"), this.range ? (this.tooltipInner.text(this.formater(this.value[0]) + " : " + this.formater(this.value[1])), this.tooltip[0].style[this.stylePos] = this.size * (this.percentage[0] + (this.percentage[1] - this.percentage[0]) / 2) / 100 - ("vertical" === this.orientation ? this.tooltip.outerHeight() / 2 : this.tooltip.outerWidth() / 2) + "px") : (this.tooltipInner.text(this.formater(this.value[0])), this.tooltip[0].style[this.stylePos] = this.size * this.percentage[0] / 100 - ("vertical" === this.orientation ? this.tooltip.outerHeight() / 2 : this.tooltip.outerWidth() / 2) + "px")
        },
        mousedown: function (t) {
            this.touchCapable && "touchstart" === t.type && (t = t.originalEvent), this.offset = this.picker.offset(), this.size = this.picker[0][this.sizePos];
            var i = this.getPercentage(t);
            if (this.range) {
                var n = Math.abs(this.percentage[0] - i),
                    a = Math.abs(this.percentage[1] - i);
                this.dragged = a > n ? 0 : 1
            } else this.dragged = 0;
            this.percentage[this.dragged] = i, this.layout(), this.touchCapable ? e(document).on({
                touchmove: e.proxy(this.mousemove, this),
                touchend: e.proxy(this.mouseup, this)
            }) : e(document).on({
                mousemove: e.proxy(this.mousemove, this),
                mouseup: e.proxy(this.mouseup, this)
            }), this.inDrag = !0;
            var o = this.calculateValue();
            return this.element.trigger({
                type: "slideStart",
                value: o
            }).trigger({
                type: "slide",
                value: o
            }), !1
        },
        mousemove: function (e) {
            this.touchCapable && "touchmove" === e.type && (e = e.originalEvent);
            var t = this.getPercentage(e);
            this.range && (0 === this.dragged && this.percentage[1] < t ? (this.percentage[0] = this.percentage[1], this.dragged = 1) : 1 === this.dragged && this.percentage[0] > t && (this.percentage[1] = this.percentage[0], this.dragged = 0)), this.percentage[this.dragged] = t, this.layout();
            var i = this.calculateValue();
            return this.element.trigger({
                type: "slide",
                value: i
            }).data("value", i).prop("value", i), !1
        },
        mouseup: function () {
            this.touchCapable ? e(document).off({
                touchmove: this.mousemove,
                touchend: this.mouseup
            }) : e(document).off({
                mousemove: this.mousemove,
                mouseup: this.mouseup
            }), this.inDrag = !1, 0 == this.over && this.hideTooltip(), this.element;
            var t = this.calculateValue();
            return this.element.trigger({
                type: "slideStop",
                value: t
            }).data("value", t).prop("value", t), !1
        },
        calculateValue: function () {
            var e;
            return this.range ? (e = [this.min + Math.round(this.diff * this.percentage[0] / 100 / this.step) * this.step, this.min + Math.round(this.diff * this.percentage[1] / 100 / this.step) * this.step], this.value = e) : (e = this.min + Math.round(this.diff * this.percentage[0] / 100 / this.step) * this.step, this.value = [e, this.value[1]]), e
        },
        getPercentage: function (e) {
            this.touchCapable && (e = e.touches[0]);
            var t = 100 * (e[this.mousePos] - this.offset[this.stylePos]) / this.size;
            return t = Math.round(t / this.percentage[2]) * this.percentage[2], Math.max(0, Math.min(100, t))
        },
        getValue: function () {
            return this.range ? this.value : this.value[0]
        },
        setValue: function (e) {
            this.value = e, this.range ? (this.value[0] = Math.max(this.min, Math.min(this.max, this.value[0])), this.value[1] = Math.max(this.min, Math.min(this.max, this.value[1]))) : (this.value = [Math.max(this.min, Math.min(this.max, this.value))], this.handle2.addClass("hide"), this.value[1] = "after" == this.selection ? this.max : this.min), this.diff = this.max - this.min, this.percentage = [100 * (this.value[0] - this.min) / this.diff, 100 * (this.value[1] - this.min) / this.diff, 100 * this.step / this.diff], this.layout()
        }
    }, e.fn.slider = function (i, n) {
        return this.each(function () {
            var a = e(this),
                o = a.data("slider"),
                r = "object" == typeof i && i;
            o || a.data("slider", o = new t(this, e.extend({}, e.fn.slider.defaults, r))), "string" == typeof i && o[i](n)
        })
    }, e.fn.slider.defaults = {
        min: 0,
        max: 10,
        step: 1,
        orientation: "horizontal",
        value: 5,
        selection: "before",
        tooltip: "show",
        handle: "round",
        formater: function (e) {
            return e
        }
    }, e.fn.slider.Constructor = t
}(window.jQuery);