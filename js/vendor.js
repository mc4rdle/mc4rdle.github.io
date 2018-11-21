"use strict";

for (var now = require("performance-now"), root = "undefined" == typeof window ? global : window, vendors = ["moz", "webkit"], suffix = "AnimationFrame", raf = root["request" + suffix], caf = root["cancel" + suffix] || root["cancelRequest" + suffix], i = 0; !raf && i < vendors.length; i++) {
  raf = root[vendors[i] + "Request" + suffix], caf = root[vendors[i] + "Cancel" + suffix] || root[vendors[i] + "CancelRequest" + suffix];
}if (!raf || !caf) {
  var last = 0,
      id = 0,
      queue = [],
      frameDuration = 1e3 / 60;raf = function raf(e) {
    if (0 === queue.length) {
      var o = now(),
          a = Math.max(0, frameDuration - (o - last));last = a + o, setTimeout(function () {
        for (var e = queue.slice(0), o = queue.length = 0; o < e.length; o++) {
          if (!e[o].cancelled) try {
            e[o].callback(last);
          } catch (e) {
            setTimeout(function () {
              throw e;
            }, 0);
          }
        }
      }, Math.round(a));
    }return queue.push({ handle: ++id, callback: e, cancelled: !1 }), id;
  }, caf = function caf(e) {
    for (var o = 0; o < queue.length; o++) {
      queue[o].handle === e && (queue[o].cancelled = !0);
    }
  };
}module.exports = function (e) {
  return raf.call(root, e);
}, module.exports.cancel = function () {
  caf.apply(root, arguments);
}, module.exports.polyfill = function (e) {
  e || (e = root), e.requestAnimationFrame = raf, e.cancelAnimationFrame = caf;
};