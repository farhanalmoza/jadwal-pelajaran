/**
 * UI Toasts
 */

'use strict';

(function () {
  // Bootstrap toasts example
  // --------------------------------------------------------------------
  const toastPlacementExample = document.querySelector('.toast-placement-ex'),
    toastPlacementBtn = document.querySelector('#showToastPlacement');
  let  toastPlacement;

  // Dispose toast when open another
  function toastDispose(toast) {
    if (toast && toast._element !== null) {
      if (toastPlacementExample) {
        toastPlacementExample.classList.remove(selectedType);
        DOMTokenList.prototype.remove.apply(toastPlacementExample.classList, selectedPlacement);
      }
      toast.dispose();
    }
  }
  // Placement Button click
  if (toastPlacementShow == 1) {
    if (toastPlacement) {
      toastDispose(toastPlacement);
    }

    toastPlacementExample.classList.add(selectedType);
    DOMTokenList.prototype.add.apply(toastPlacementExample.classList, ['top-0', 'end-0']);
    toastPlacement = new bootstrap.Toast(toastPlacementExample);
    toastPlacement.show();
  }
})();
