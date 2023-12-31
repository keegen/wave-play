/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/***/ (() => {

window.url = document.querySelector("meta[name='url']").getAttribute("content");
window.csrf = document.querySelector("meta[name='csrf-token']").getAttribute("content");

/** Adds some simple class replacers, see the following article to learn more:
 * https://devdojo.com/tnylea/animating-tailwind-transitions-on-page-load
 */

document.addEventListener("DOMContentLoaded", function () {
  var replacers = document.querySelectorAll('[data-replace]');
  var _loop = function _loop() {
    var replaceClasses = JSON.parse(replacers[i].dataset.replace.replace(/'/g, '"'));
    Object.keys(replaceClasses).forEach(function (key) {
      replacers[i].classList.remove(key);
      replacers[i].classList.add(replaceClasses[key]);
    });
  };
  for (var i = 0; i < replacers.length; i++) {
    _loop();
  }
});

/********** NOTIFICATION FUNCTIONALITY **********/

var markAsRead = document.getElementsByClassName("mark-as-read");
var removedNotifications = 0;
var unreadNotifications = markAsRead.length;
for (var i = 0; i < markAsRead.length; i++) {
  markAsRead[i].addEventListener('click', function () {
    var notificationId = this.dataset.id;
    var notificationListId = this.dataset.listid;
    var notificationRequest = new XMLHttpRequest();
    notificationRequest.open("POST", url + "/notification/read/" + notificationId, true);
    notificationRequest.onreadystatechange = function () {
      if (notificationRequest.readyState != 4 || notificationRequest.status != 200) return;
      var response = JSON.parse(notificationRequest.responseText);
      document.getElementById('notification-li-' + response.listid).remove();
      removedNotifications += 1;
      var notificationCount = document.getElementById('notification-count');
      if (notificationCount) {
        notificationCount.innerHTML = parseInt(notificationCount.innerHTML) - 1;
      }
      if (removedNotifications >= unreadNotifications) {
        if (document.getElementById('notification-count')) {
          document.getElementById('notification-count').classList.add('opacity-0');
        }
      }
    };
    notificationRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    notificationRequest.send("_token=" + csrf + "&listid=" + notificationListId);
  });
}

/********** END NOTIFICATION FUNCTIONALITY **********/

/********** START TOAST FUNCTIONALITY **********/

window.popToast = function (type, message) {
  document.getElementById('toast').__x.$data.type = type;
  document.getElementById('toast').__x.$data.message = message;
  document.getElementById('toast').__x.$data.show = true;
  setTimeout(function () {
    document.getElementById('toast_bar').classList.remove('w-full');
    document.getElementById('toast_bar').classList.add('w-0');
  }, 150);
  // After 4 seconds hide the toast
  setTimeout(function () {
    document.getElementById('toast').__x.$data.show = false;
    setTimeout(function () {
      document.getElementById('toast_bar').classList.remove('w-0');
      document.getElementById('toast_bar').classList.add('w-full');
    }, 300);
  }, 4000);
};
window.addEventListener('popToast', function (event) {
  popToast(event.detail.type, event.detail.message);
});

/********** END TOAST FUNCTIONALITY **********/

/********** Start Billing Checkout Functionality ***********/

/***** Payment Success Functionality */

window.checkoutComplete = function (data) {
  var checkoutId = data.checkout.id;
  Paddle.Order.details(checkoutId, function (data) {
    // Order data, downloads, receipts etc... available within 'data' variable.
    document.getElementById('fullscreenLoaderMessage').innerText = 'Finishing Up Your Order';
    document.getElementById('fullscreenLoader').classList.remove('hidden');
    window.livewire.emit('checkout', {
      checkout_id: data.checkout.checkout_id
    });
  });
};

// This event listener will be called from the Livewire controller
// at Wave\Http\Livewire\Settings\Plan after a successful purchase

window.addEventListener('checkoutCompleteResponse', function (event) {
  if (parseInt(event.detail.status) == 1) {
    var queryParams = '';
    if (parseInt(event.detail.guest) == 1) {
      queryParams = '?complete=true';
    }
    window.location = '/checkout/welcome' + queryParams;
  }
});
window.checkoutUpdate = function (data) {
  if (data.checkout.completed) {
    popToast('success', 'Your payment info has been successfully updated.');
  } else {
    popToast('danger', 'Sorry, there seems to be a problem updating your payment info');
  }
};
window.checkoutCancel = function (data) {
  var subscriptionId = data.checkout.id;
  window.livewire.emit('checkoutCancel', {
    id: subscriptionId
  });
};
window.addEventListener('checkoutCancelResponse', function (event) {
  if (parseInt(event.detail.status) == 1) {
    window.location = '/settings/subscription';
  }
});

/***** End Payment Success Functionality */

/********** End Billing Checkout Functionality ***********/

/********** Switch Plans Button Click ***********/

window.switchPlans = function (plan_id, plan_name) {
  document.getElementById('switchPlansModal').__x.$data.open = true;
  document.getElementById('switchPlansModal').__x.$data.plan_name = plan_name;
  document.getElementById('switchPlansModal').__x.$data.plan_id = plan_id;
};

/********** Switch Plans Button Click ***********/

/****** I'm Interested Button */
document.addEventListener('DOMContentLoaded', function () {
  var interestButtons = document.querySelectorAll('.interestButton');
  interestButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var modalId = 'modal-' + button.getAttribute('data-modal');
      var modal = document.getElementById(modalId);
      modal.classList.remove('hidden');

      // Attach close event to each modal's close button
      var closeModal = modal.querySelector('.closeModal');
      closeModal.addEventListener('click', function () {
        modal.classList.add('hidden');
      });
    });
  });
});

/***/ }),

/***/ "./assets/sass/app.scss":
/*!******************************!*\
  !*** ./assets/sass/app.scss ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./assets/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./assets/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;