define("durandal/activator", ["durandal/system"], function (e) {
    function t(e) {
        return void 0 == e && (e = {}), e.closeOnDeactivate || (e.closeOnDeactivate = s.defaults.closeOnDeactivate), e.beforeActivate || (e.beforeActivate = s.defaults.beforeActivate), e.afterDeactivate || (e.afterDeactivate = s.defaults.afterDeactivate), e.interpretResponse || (e.interpretResponse = s.defaults.interpretResponse), e.areSameItem || (e.areSameItem = s.defaults.areSameItem), e
    }

    function n(t, n, i) {
        return e.isArray(i) ? t[n].apply(t, i) : t[n](i)
    }

    function i(t, n, i, o, r) {
        if (t && t.deactivate) {
            e.log("Deactivating", t);
            var a;
            try {
                a = t.deactivate(n)
            } catch (c) {
                return e.error(c), o.resolve(!1), void 0
            }
            a && a.then ? a.then(function () {
                i.afterDeactivate(t, n, r), o.resolve(!0)
            }, function (t) {
                e.log(t), o.resolve(!1)
            }) : (i.afterDeactivate(t, n, r), o.resolve(!0))
        } else t && i.afterDeactivate(t, n, r), o.resolve(!0)
    }

    function o(t, i, o, r) {
        if (t)if (t.activate) {
            e.log("Activating", t);
            var a;
            try {
                a = n(t, "activate", r)
            } catch (c) {
                return e.error(c), o(!1), void 0
            }
            a && a.then ? a.then(function () {
                i(t), o(!0)
            }, function (t) {
                e.log(t), o(!1)
            }) : (i(t), o(!0))
        } else i(t), o(!0); else o(!0)
    }

    function r(t, n, i) {
        return e.defer(function (o) {
            if (t && t.canDeactivate) {
                var r;
                try {
                    r = t.canDeactivate(n)
                } catch (a) {
                    return e.error(a), o.resolve(!1), void 0
                }
                r.then ? r.then(function (e) {
                    o.resolve(i.interpretResponse(e))
                }, function (t) {
                    e.log(t), o.resolve(!1)
                }) : o.resolve(i.interpretResponse(r))
            } else o.resolve(!0)
        }).promise()
    }

    function a(t, i, o, r) {
        return e.defer(function (a) {
            if (t == i())return a.resolve(!0), void 0;
            if (t && t.canActivate) {
                var c;
                try {
                    c = n(t, "canActivate", r)
                } catch (s) {
                    return e.error(s), a.resolve(!1), void 0
                }
                c.then ? c.then(function (e) {
                    a.resolve(o.interpretResponse(e))
                }, function (t) {
                    e.log(t), a.resolve(!1)
                }) : a.resolve(o.interpretResponse(c))
            } else a.resolve(!0)
        }).promise()
    }

    function c(n, c) {
        var s = ko.observable(null);
        c = t(c);
        var u = ko.computed({read: function () {
            return s()
        }, write: function (e) {
            u.viaSetter = !0, u.activateItem(e)
        }});
        return u.__activator__ = !0, u.settings = c, c.activator = u, u.isActivating = ko.observable(!1), u.canDeactivateItem = function (e, t) {
            return r(e, t, c)
        }, u.deactivateItem = function (t, n) {
            return e.defer(function (e) {
                u.canDeactivateItem(t, n).then(function (o) {
                    o ? i(t, n, c, e, s) : (u.notifySubscribers(), e.resolve(!1))
                })
            }).promise()
        }, u.canActivateItem = function (e, t) {
            return a(e, s, c, t)
        }, u.activateItem = function (t, n) {
            var r = u.viaSetter;
            return u.viaSetter = !1, e.defer(function (a) {
                if (u.isActivating())return a.resolve(!1), void 0;
                u.isActivating(!0);
                var l = s();
                return c.areSameItem(l, t, n) ? (u.isActivating(!1), a.resolve(!0), void 0) : (u.canDeactivateItem(l, c.closeOnDeactivate).then(function (d) {
                    d ? u.canActivateItem(t, n).then(function (d) {
                        d ? e.defer(function (e) {
                            i(l, c.closeOnDeactivate, c, e)
                        }).promise().then(function () {
                            t = c.beforeActivate(t, n), o(t, s, function (e) {
                                u.isActivating(!1), a.resolve(e)
                            }, n)
                        }) : (r && u.notifySubscribers(), u.isActivating(!1), a.resolve(!1))
                    }) : (r && u.notifySubscribers(), u.isActivating(!1), a.resolve(!1))
                }), void 0)
            }).promise()
        }, u.canActivate = function () {
            var e;
            return n ? (e = n, n = !1) : e = u(), u.canActivateItem(e)
        }, u.activate = function () {
            var e;
            return n ? (e = n, n = !1) : e = u(), u.activateItem(e)
        }, u.canDeactivate = function (e) {
            return u.canDeactivateItem(u(), e)
        }, u.deactivate = function (e) {
            return u.deactivateItem(u(), e)
        }, u.includeIn = function (e) {
            e.canActivate = function () {
                return u.canActivate()
            }, e.activate = function () {
                return u.activate()
            }, e.canDeactivate = function (e) {
                return u.canDeactivate(e)
            }, e.deactivate = function (e) {
                return u.deactivate(e)
            }
        }, c.includeIn ? u.includeIn(c.includeIn) : n && u.activate(), u.forItems = function (t) {
            c.closeOnDeactivate = !1, c.determineNextItemToActivate = function (e, t) {
                var n = t - 1;
                return-1 == n && e.length > 1 ? e[1] : n > -1 && n < e.length - 1 ? e[n] : null
            }, c.beforeActivate = function (e) {
                var n = u();
                if (e) {
                    var i = t.indexOf(e);
                    -1 == i ? t.push(e) : e = t()[i]
                } else e = c.determineNextItemToActivate(t, n ? t.indexOf(n) : 0);
                return e
            }, c.afterDeactivate = function (e, n) {
                n && t.remove(e)
            };
            var n = u.canDeactivate;
            u.canDeactivate = function (i) {
                return i ? e.defer(function (e) {
                    function n() {
                        for (var t = 0; t < r.length; t++)if (!r[t])return e.resolve(!1), void 0;
                        e.resolve(!0)
                    }

                    for (var o = t(), r = [], a = 0; a < o.length; a++)u.canDeactivateItem(o[a], i).then(function (e) {
                        r.push(e), r.length == o.length && n()
                    })
                }).promise() : n()
            };
            var i = u.deactivate;
            return u.deactivate = function (n) {
                return n ? e.defer(function (e) {
                    function i(i) {
                        u.deactivateItem(i, n).then(function () {
                            r++, t.remove(i), r == a && e.resolve()
                        })
                    }

                    for (var o = t(), r = 0, a = o.length, c = 0; a > c; c++)i(o[c])
                }).promise() : i()
            }, u
        }, u
    }

    var s;
    return s = {defaults: {closeOnDeactivate: !0, interpretResponse: function (e) {
        if ("string" == typeof e) {
            var t = e.toLowerCase();
            return"yes" == t || "ok" == t
        }
        return e
    }, areSameItem: function (e, t) {
        return e == t
    }, beforeActivate: function (e) {
        return e
    }, afterDeactivate: function (e, t, n) {
        t && n && n(null)
    }}, create: c}
}), define("durandal/app", ["durandal/system", "durandal/viewEngine", "durandal/composition", "durandal/widget", "durandal/modalDialog", "durandal/events"], function (e, t, n, i, o, r) {
    var a = {title: "Application", showModal: function (e, t, n) {
        return o.show(e, t, n)
    }, showMessage: function (e, t, n) {
        return o.show("./messageBox", {message: e, title: t || this.title, options: n})
    }, start: function () {
        var t = this;
        return t.title && (document.title = t.title), e.defer(function (t) {
            $(function () {
                e.log("Starting Application"), t.resolve(), e.log("Started Application")
            })
        }).promise()
    }, setRoot: function (i, o, r) {
        var a, c = {activate: !0, transition: o};
        a = !r || e.isString(r) ? document.getElementById(r || "applicationHost") : r, e.isString(i) ? t.isViewUrl(i) ? c.view = i : c.model = i : c.model = i, n.compose(a, c)
    }, adaptToDevice: function () {
        document.ontouchmove = function (e) {
            e.preventDefault()
        }
    }};
    return r.includeIn(a), a
}), define("durandal/composition", ["durandal/viewLocator", "durandal/viewModelBinder", "durandal/viewEngine", "durandal/system"], function (e, t, n, i) {
    function o(e) {
        for (var t = [], n = {childElements: t, activeView: null}, i = ko.virtualElements.firstChild(e); i;)1 == i.nodeType && (t.push(i), i.getAttribute(d) && (n.activeView = i)), i = ko.virtualElements.nextSibling(i);
        return n
    }

    function r() {
        if (v--, 0 === v) {
            for (var e = 0; e < f.length; e++)f[e]();
            f = []
        }
    }

    function a(e, t) {
        if (e.activate && e.model && e.model.activate) {
            var n;
            n = i.isArray(e.activationData) ? e.model.activate.apply(e.model, e.activationData) : e.model.activate(e.activationData), n && n.then ? n.then(t) : n || void 0 === n ? t() : r()
        } else t()
    }

    function c() {
        var e = this;
        e.activeView && e.activeView.removeAttribute(d), e.child && (e.model && e.model.viewAttached && (e.composingNewView || e.alwaysAttachView) && e.model.viewAttached(e.child, e), e.child.setAttribute(d, !0), e.composingNewView && e.model && (e.model.documentAttached && u.current.completed(function () {
            e.model.documentAttached(e.child, e)
        }), e.model.documentDetached && u.documentDetached(e.child, function () {
            e.model.documentDetached(e.child, e)
        }))), e.afterCompose && e.afterCompose(e.child, e), e.documentAttached && u.current.completed(function () {
            e.documentAttached(e.child, e)
        }), r(), e.triggerViewAttached = i.noop
    }

    function s(e) {
        if (i.isString(e.transition)) {
            if (e.activeView) {
                if (e.activeView == e.child)return!1;
                if (!e.child)return!0;
                if (e.skipTransitionOnSameViewId) {
                    var t = e.activeView.getAttribute("data-view"), n = e.child.getAttribute("data-view");
                    return t != n
                }
            }
            return!0
        }
        return!1
    }

    var u, l = {}, d = "data-active-view", f = [], v = 0;
    return u = {convertTransitionToModuleId: function (e) {
        return"transitions/" + e
    }, current: {completed: function (e) {
        f.push(e)
    }}, documentDetached: function (e, t) {
        ko.utils.domNodeDisposal.addDisposeCallback(e, t)
    }, switchContent: function (e) {
        if (e.transition = e.transition || this.defaultTransitionName, s(e)) {
            var t = this.convertTransitionToModuleId(e.transition);
            i.acquire(t).then(function (t) {
                e.transition = t, t(e).then(function () {
                    e.triggerViewAttached()
                })
            })
        } else e.child != e.activeView && (e.cacheViews && e.activeView && $(e.activeView).css("display", "none"), e.child ? e.cacheViews ? e.composingNewView ? (e.viewElements.push(e.child), ko.virtualElements.prepend(e.parent, e.child)) : $(e.child).css("display", "") : (ko.virtualElements.emptyNode(e.parent), ko.virtualElements.prepend(e.parent, e.child)) : e.cacheViews || ko.virtualElements.emptyNode(e.parent)), e.triggerViewAttached()
    }, bindAndShow: function (e, i) {
        i.child = e, i.composingNewView = i.cacheViews ? -1 == ko.utils.arrayIndexOf(i.viewElements, e) : !0, a(i, function () {
            if (i.beforeBind && i.beforeBind(e, i), i.preserveContext && i.bindingContext)i.composingNewView && t.bindContext(i.bindingContext, e, i.model); else if (e) {
                var o = i.model || l, r = ko.dataFor(e);
                if (r != o) {
                    if (!i.composingNewView)return $(e).remove(), n.createView(e.getAttribute("data-view")).then(function (e) {
                        u.bindAndShow(e, i)
                    }), void 0;
                    t.bind(o, e)
                }
            }
            u.switchContent(i)
        })
    }, defaultStrategy: function (t) {
        return e.locateViewForObject(t.model, t.viewElements)
    }, getSettings: function (e) {
        var t, n = e(), o = ko.utils.unwrapObservable(n) || {}, r = n && n.__activator__;
        if (i.isString(o))return o;
        if (t = i.getModuleId(o))o = {model: o}; else {
            !r && o.model && (r = o.model.__activator__);
            for (var a in o)o[a] = ko.utils.unwrapObservable(o[a])
        }
        return r ? o.activate = !1 : void 0 === o.activate && (o.activate = !0), o
    }, executeStrategy: function (e) {
        e.strategy(e).then(function (t) {
            u.bindAndShow(t, e)
        })
    }, inject: function (t) {
        return t.model ? t.view ? (e.locateView(t.view, t.area, t.viewElements).then(function (e) {
            u.bindAndShow(e, t)
        }), void 0) : (t.strategy || (t.strategy = this.defaultStrategy), i.isString(t.strategy) ? i.acquire(t.strategy).then(function (e) {
            t.strategy = e, u.executeStrategy(t)
        }) : this.executeStrategy(t), void 0) : (this.bindAndShow(null, t), void 0)
    }, compose: function (t, r, a) {
        v++, i.isString(r) && (r = n.isViewUrl(r) ? {view: r} : {model: r, activate: !0});
        var s = i.getModuleId(r);
        s && (r = {model: r, activate: !0});
        var l = o(t);
        r.activeView = l.activeView, r.parent = t, r.triggerViewAttached = c, r.bindingContext = a, r.cacheViews && !r.viewElements && (r.viewElements = l.childElements), r.model ? i.isString(r.model) ? i.acquire(r.model).then(function (e) {
            r.model = new (i.getObjectResolver(e)), u.inject(r)
        }) : u.inject(r) : r.view ? (r.area = r.area || "partial", r.preserveContext = !0, e.locateView(r.view, r.area, r.viewElements).then(function (e) {
            u.bindAndShow(e, r)
        })) : this.bindAndShow(null, r)
    }}, ko.bindingHandlers.compose = {update: function (e, t, n, i, o) {
        var r = u.getSettings(t);
        u.compose(e, r, o)
    }}, ko.virtualElements.allowedBindings.compose = !0, u
}), define("durandal/events", ["durandal/system"], function (e) {
    var t = /\s+/, n = function () {
    }, i = function (e, t) {
        this.owner = e, this.events = t
    };
    return i.prototype.then = function (e, t) {
        return this.callback = e || this.callback, this.context = t || this.context, this.callback ? (this.owner.on(this.events, this.callback, this.context), this) : this
    }, i.prototype.on = i.prototype.then, i.prototype.off = function () {
        return this.owner.off(this.events, this.callback, this.context), this
    }, n.prototype.on = function (e, n, o) {
        var r, a, c;
        if (n) {
            for (r = this.callbacks || (this.callbacks = {}), e = e.split(t); a = e.shift();)c = r[a] || (r[a] = []), c.push(n, o);
            return this
        }
        return new i(this, e)
    }, n.prototype.off = function (n, i, o) {
        var r, a, c, s;
        if (!(a = this.callbacks))return this;
        if (!(n || i || o))return delete this.callbacks, this;
        for (n = n ? n.split(t) : e.keys(a); r = n.shift();)if ((c = a[r]) && (i || o))for (s = c.length - 2; s >= 0; s -= 2)i && c[s] !== i || o && c[s + 1] !== o || c.splice(s, 2); else delete a[r];
        return this
    }, n.prototype.trigger = function (e) {
        var n, i, o, r, a, c, s, u;
        if (!(i = this.callbacks))return this;
        for (u = [], e = e.split(t), r = 1, a = arguments.length; a > r; r++)u[r - 1] = arguments[r];
        for (; n = e.shift();) {
            if ((s = i.all) && (s = s.slice()), (o = i[n]) && (o = o.slice()), o)for (r = 0, a = o.length; a > r; r += 2)o[r].apply(o[r + 1] || this, u);
            if (s)for (c = [n].concat(u), r = 0, a = s.length; a > r; r += 2)s[r].apply(s[r + 1] || this, c)
        }
        return this
    }, n.prototype.proxy = function (e) {
        var t = this;
        return function (n) {
            t.trigger(e, n)
        }
    }, n.includeIn = function (e) {
        e.on = n.prototype.on, e.off = n.prototype.off, e.trigger = n.prototype.trigger, e.proxy = n.prototype.proxy
    }, n
}), define("durandal/messageBox", ["durandal/viewEngine"], function (e) {
    var t = function (e, n, i) {
        this.message = e, this.title = n || t.defaultTitle, this.options = i || t.defaultOptions
    };
    return t.prototype.selectOption = function (e) {
        this.modal.close(e)
    }, t.prototype.getView = function () {
        return e.processMarkup(t.defaultViewMarkup)
    }, t.prototype.activate = function (e) {
        e && (this.message = e.message, this.title = e.title || t.defaultTitle, this.options = e.options || t.defaultOptions)
    }, t.defaultTitle = "Application", t.defaultOptions = ["Ok"], t.defaultViewMarkup = ['<div class="messageBox">', '<div class="modal-header">', '<h3 data-bind="text: title"></h3>', "</div>", '<div class="modal-body">', '   <p class="message" data-bind="text: message"></p>', "</div>", '<div class="modal-footer" data-bind="foreach: options">', '<button class="btn" data-bind="click: function () { $parent.selectOption($data); }, text: $data, css: { \'btn-primary\': $index() == 0, autofocus: $index() == 0 }"></button>', "</div>", "</div>"].join("\n"), t
}), define("durandal/modalDialog", ["durandal/composition", "durandal/system", "durandal/activator"], function (e, t, n) {
    function i(e) {
        return t.defer(function (n) {
            t.isString(e) ? t.acquire(e).then(function (e) {
                n.resolve(new (t.getObjectResolver(e)))
            }) : n.resolve(e)
        }).promise()
    }

    var o = {}, r = 0, a = {currentZIndex: 1050, getNextZIndex: function () {
        return++this.currentZIndex
    }, isDialogOpen: function () {
        return r > 0
    }, getContext: function (e) {
        return o[e || "default"]
    }, addContext: function (e, t) {
        t.name = e, o[e] = t;
        var n = "show" + e.substr(0, 1).toUpperCase() + e.substr(1);
        this[n] = function (t, n) {
            return this.show(t, n, e)
        }
    }, createCompositionSettings: function (e, t) {
        var n = {model: e, activate: !1};
        return t.documentAttached && (n.documentAttached = t.documentAttached), n
    }, show: function (a, c, s) {
        var u = this, l = o[s || "default"];
        return t.defer(function (t) {
            i(a).then(function (i) {
                var o = n.create();
                o.activateItem(i, c).then(function (n) {
                    if (n) {
                        var a = i.modal = {owner: i, context: l, activator: o, close: function () {
                            var e = arguments;
                            o.deactivateItem(i, !0).then(function (n) {
                                n && (r--, l.removeHost(a), delete i.modal, t.resolve.apply(t, e))
                            })
                        }};
                        a.settings = u.createCompositionSettings(i, l), l.addHost(a), r++, e.compose(a.host, a.settings)
                    } else t.resolve(!1)
                })
            })
        }).promise()
    }};
    return a.addContext("default", {blockoutOpacity: .2, removeDelay: 200, addHost: function (e) {
        var t = $("body"), n = $('<div class="modalBlockout"></div>').css({"z-index": a.getNextZIndex(), opacity: this.blockoutOpacity}).appendTo(t), i = $('<div class="modalHost"></div>').css({"z-index": a.getNextZIndex()}).appendTo(t);
        if (e.host = i.get(0), e.blockout = n.get(0), !a.isDialogOpen()) {
            e.oldBodyMarginRight = $("body").css("margin-right");
            var o = $("html"), r = t.outerWidth(!0), c = o.scrollTop();
            $("html").css("overflow-y", "hidden");
            var s = $("body").outerWidth(!0);
            t.css("margin-right", s - r + parseInt(e.oldBodyMarginRight) + "px"), o.scrollTop(c)
        }
    }, removeHost: function (e) {
        if ($(e.host).css("opacity", 0), $(e.blockout).css("opacity", 0), setTimeout(function () {
            $(e.host).remove(), $(e.blockout).remove()
        }, this.removeDelay), !a.isDialogOpen()) {
            var t = $("html"), n = t.scrollTop();
            t.css("overflow-y", "").scrollTop(n), $("body").css("margin-right", e.oldBodyMarginRight)
        }
    }, documentAttached: function (e, t) {
        var n = $(e), i = n.width(), o = n.height();
        n.css({"margin-top": (-o / 2).toString() + "px", "margin-left": (-i / 2).toString() + "px"}), $(t.model.modal.host).css("opacity", 1), $(e).hasClass("autoclose") && $(t.model.modal.blockout).click(function () {
            t.model.modal.close()
        }), $(".autofocus", e).each(function () {
            $(this).focus()
        })
    }}), a
}), define("durandal/system", ["require"], function (e) {
    function t(e) {
        var t = "[object " + e + "]";
        n["is" + e] = function (e) {
            return a.call(e) == t
        }
    }

    var n, i = !1, o = Object.keys, r = Object.prototype.hasOwnProperty, a = Object.prototype.toString, c = !1, s = Array.isArray, u = Array.prototype.slice;
    if (Function.prototype.bind && ("object" == typeof console || "function" == typeof console) && "object" == typeof console.log)try {
        ["log", "info", "warn", "error", "assert", "dir", "clear", "profile", "profileEnd"].forEach(function (e) {
            console[e] = this.call(console[e], console)
        }, Function.prototype.bind)
    } catch (l) {
        c = !0
    }
    e.on && e.on("moduleLoaded", function (e, t) {
        n.setModuleId(e, t)
    }), "undefined" != typeof requirejs && (requirejs.onResourceLoad = function (e, t) {
        n.setModuleId(e.defined[t.id], t.id)
    });
    var d = function () {
    }, f = function () {
        try {
            if ("undefined" != typeof console && "function" == typeof console.log)if (window.opera)for (var e = 0; e < arguments.length;)console.log("Item " + (e + 1) + ": " + arguments[e]), e++; else 1 == u.call(arguments).length && "string" == typeof u.call(arguments)[0] ? console.log(u.call(arguments).toString()) : console.log(u.call(arguments)); else Function.prototype.bind && !c || "undefined" == typeof console || "object" != typeof console.log || Function.prototype.call.call(console.log, console, u.call(arguments))
        } catch (t) {
        }
    }, v = function (e) {
        throw e
    };
    n = {version: "2.0.0", noop: d, getModuleId: function (e) {
        return e ? "function" == typeof e ? e.prototype.__moduleId__ : "string" == typeof e ? null : e.__moduleId__ : null
    }, setModuleId: function (e, t) {
        return e ? "function" == typeof e ? (e.prototype.__moduleId__ = t, void 0) : ("string" != typeof e && (e.__moduleId__ = t), void 0) : void 0
    }, getObjectResolver: function (e) {
        return n.isFunction(e) ? e : function () {
            return e
        }
    }, debug: function (e) {
        return 1 != arguments.length ? i : (i = e, i ? (this.log = f, this.error = v, this.log("Debug mode enabled.")) : (this.log("Debug mode disabled."), this.log = d, this.error = d), void 0)
    }, log: d, error: d, assert: function (e, t) {
        e || n.error(new Error(t || "Assertion failed."))
    }, defer: function (e) {
        return $.Deferred(e)
    }, guid: function () {
        return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function (e) {
            var t = 0 | 16 * Math.random(), n = "x" == e ? t : 8 | 3 & t;
            return n.toString(16)
        })
    }, acquire: function () {
        var t = u.call(arguments, 0);
        return this.defer(function (n) {
            e(t, function () {
                var e = arguments;
                setTimeout(function () {
                    n.resolve.apply(n, e)
                }, 1)
            })
        }).promise()
    }, extend: function (e) {
        for (var t = u.call(arguments, 1), n = 0; n < t.length; n++) {
            var i = t[n];
            if (i)for (var o in i)e[o] = i[o]
        }
        return e
    }}, n.keys = o || function (e) {
        if (e !== Object(e))throw new TypeError("Invalid object");
        var t = [];
        for (var n in e)r.call(e, n) && (t[t.length] = n);
        return t
    }, n.isElement = function (e) {
        return!(!e || 1 !== e.nodeType)
    }, n.isArray = s || function (e) {
        return"[object Array]" == a.call(e)
    }, n.isObject = function (e) {
        return e === Object(e)
    }, n.isBoolean = function (e) {
        return"boolean" == typeof e
    };
    for (var p = ["Arguments", "Function", "String", "Number", "Date", "RegExp"], h = 0; h < p.length; h++)t(p[h]);
    return n
}), define("durandal/viewEngine", ["durandal/system"], function (e) {
    var t;
    return t = $.parseHTML ? function (e) {
        return $.parseHTML(e)
    } : function (e) {
        return $(e).get()
    }, {viewExtension: ".html", viewPlugin: "text", isViewUrl: function (e) {
        return-1 !== e.indexOf(this.viewExtension, e.length - this.viewExtension.length)
    }, convertViewUrlToViewId: function (e) {
        return e.substring(0, e.length - this.viewExtension.length)
    }, convertViewIdToRequirePath: function (e) {
        return this.viewPlugin + "!" + e + this.viewExtension
    }, parseMarkup: t, processMarkup: function (e) {
        var t = this.parseMarkup(e);
        if (1 == t.length)return t[0];
        for (var n = [], i = 0; i < t.length; i++) {
            var o = t[i];
            if (8 != o.nodeType) {
                if (3 == o.nodeType) {
                    var r = /\S/.test(o.nodeValue);
                    if (!r)continue
                }
                n.push(o)
            }
        }
        return n.length > 1 ? $(n).wrapAll('<div class="durandal-wrapper"></div>').parent().get(0) : n[0]
    }, createView: function (t) {
        var n = this, i = this.convertViewIdToRequirePath(t);
        return e.defer(function (o) {
            e.acquire(i).then(function (e) {
                var i = n.processMarkup(e);
                i.setAttribute("data-view", t), o.resolve(i)
            })
        }).promise()
    }}
}), define("durandal/viewLocator", ["durandal/system", "durandal/viewEngine"], function (e, t) {
    function n(e, t) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n], o = i.getAttribute("data-view");
            if (o == t)return i
        }
    }

    function i(e) {
        return(e + "").replace(/([\\\.\+\*\?\[\^\]\$\(\)\{\}\=\!\<\>\|\:])/g, "\\$1")
    }

    return{useConvention: function (e, t, n) {
        e = e || "viewmodels", t = t || "views", n = n || t;
        var o = new RegExp(i(e), "gi");
        this.convertModuleIdToViewId = function (e) {
            return e.replace(o, t)
        }, this.translateViewIdToArea = function (e, t) {
            return t && "partial" != t ? n + "/" + t + "/" + e : n + "/" + e
        }
    }, locateViewForObject: function (t, n) {
        var i;
        if (t.getView && (i = t.getView()))return this.locateView(i, null, n);
        if (t.viewUrl)return this.locateView(t.viewUrl, null, n);
        var o = e.getModuleId(t);
        return o ? this.locateView(this.convertModuleIdToViewId(o), null, n) : this.locateView(this.determineFallbackViewId(t), null, n)
    }, convertModuleIdToViewId: function (e) {
        return e
    }, determineFallbackViewId: function (e) {
        var t = /function (.{1,})\(/, n = t.exec(e.constructor.toString()), i = n && n.length > 1 ? n[1] : "";
        return"views/" + i
    }, translateViewIdToArea: function (e) {
        return e
    }, locateView: function (i, o, r) {
        if ("string" == typeof i) {
            var a;
            if (a = t.isViewUrl(i) ? t.convertViewUrlToViewId(i) : i, o && (a = this.translateViewIdToArea(a, o)), r) {
                var c = n(r, a);
                if (c)return e.defer(function (e) {
                    e.resolve(c)
                }).promise()
            }
            return t.createView(a)
        }
        return e.defer(function (e) {
            e.resolve(i)
        }).promise()
    }}
}), define("durandal/viewModelBinder", ["durandal/system"], function (e) {
    function t(t, r, a) {
        if (!r || !t)return n.throwOnErrors ? e.error(new Error(i)) : e.log(i, r, t), void 0;
        if (!r.getAttribute)return n.throwOnErrors ? e.error(new Error(o)) : e.log(o, r, t), void 0;
        var c = r.getAttribute("data-view");
        try {
            n.beforeBind(t, r), a(c), n.afterBind(t, r)
        } catch (s) {
            n.throwOnErrors ? e.error(new Error(s.message + ";\nView: " + c + ";\nModuleId: " + e.getModuleId(t))) : e.log(s.message, c, t)
        }
    }

    var n, i = "Insufficient Information to Bind", o = "Unexpected View Type";
    return n = {beforeBind: e.noop, afterBind: e.noop, throwOnErrors: !1, bindContext: function (n, i, o) {
        o && (n = n.createChildContext(o)), t(n, i, function (t) {
            o && o.beforeBind && o.beforeBind(i), e.log("Binding", t, o || n), ko.applyBindings(n, i), o && o.afterBind && o.afterBind(i)
        })
    }, bind: function (n, i) {
        t(n, i, function (t) {
            n.beforeBind && n.beforeBind(i), e.log("Binding", t, n), ko.applyBindings(n, i), n.afterBind && n.afterBind(i)
        })
    }}
}), define("durandal/widget", ["durandal/system", "durandal/composition"], function (e, t) {
    var n = "data-part", i = "[" + n + "]", o = {}, r = {}, a = ["model", "view", "kind"], c = {getParts: function (t) {
        var o = {};
        e.isArray(t) || (t = [t]);
        for (var r = 0; r < t.length; r++) {
            var a = t[r];
            if (a.getAttribute) {
                var c = a.getAttribute(n);
                c && (o[c] = a);
                for (var s = $(i, a).not($('[data-bind^="widget:"] ' + i, a)), u = 0; u < s.length; u++) {
                    var l = s.get(u);
                    o[l.getAttribute(n)] = l
                }
            }
        }
        return o
    }, getSettings: function (t) {
        var n = ko.utils.unwrapObservable(t()) || {};
        if (e.isString(n))return n;
        for (var i in n)n[i] = -1 != ko.utils.arrayIndexOf(a, i) ? ko.utils.unwrapObservable(n[i]) : n[i];
        return n
    }, registerKind: function (e) {
        ko.bindingHandlers[e] = {init: function () {
            return{controlsDescendantBindings: !0}
        }, update: function (t, n, i, o, r) {
            var a = c.getSettings(n);
            a.kind = e, c.create(t, a, r)
        }}, ko.virtualElements.allowedBindings[e] = !0
    }, mapKind: function (e, t, n) {
        t && (r[e] = t), n && (o[e] = n)
    }, mapKindToModuleId: function (e) {
        return o[e] || c.convertKindToModulePath(e)
    }, convertKindToModulePath: function (e) {
        return"widgets/" + e + "/viewmodel"
    }, mapKindToViewId: function (e) {
        return r[e] || c.convertKindToViewPath(e)
    }, convertKindToViewPath: function (e) {
        return"widgets/" + e + "/view"
    }, beforeBind: function (e, t) {
        var n = c.getParts(t.parent), i = c.getParts(e);
        for (var o in n)$(i[o]).replaceWith(n[o])
    }, createCompositionSettings: function (e, t) {
        return t.model || (t.model = this.mapKindToModuleId(t.kind)), t.view || (t.view = this.mapKindToViewId(t.kind)), t.preserveContext = !0, t.beforeBind = this.beforeBind, t.activate = !0, t.activationData = t, t
    }, create: function (n, i, o) {
        e.isString(i) && (i = {kind: i});
        var r = c.createCompositionSettings(n, i);
        t.compose(n, r, o)
    }};
    return ko.bindingHandlers.widget = {init: function () {
        return{controlsDescendantBindings: !0}
    }, update: function (e, t, n, i, o) {
        var r = c.getSettings(t);
        c.create(e, r, o)
    }}, ko.virtualElements.allowedBindings.widget = !0, c
});