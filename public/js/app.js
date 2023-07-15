import { tableKangaroo } from './kangaroos/index.js';
import { storeKangaroo } from './kangaroos/store.js';
import { updateKangaroo } from './kangaroos/update.js';

$(document).ready(function() {
    tableKangaroo();
    storeKangaroo();
    updateKangaroo();

    $('.dropdown').click(function() {
        $('.dropdown-menu').toggleClass('show');
    });
}); 