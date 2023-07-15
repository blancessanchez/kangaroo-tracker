import { tableKangaroo } from './kangaroos/index.js';
import { addKangaroo } from './kangaroos/add.js';
import { editKangaroo } from './kangaroos/edit.js';

$(document).ready(function() {
    tableKangaroo();
    addKangaroo();
    editKangaroo();
}); 