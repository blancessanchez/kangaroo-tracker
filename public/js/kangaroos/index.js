export function tableKangaroo() {
    $('#dataGrid').dxDataGrid({
        dataSource: kangaroos,
        columns: [
            {
                dataField: 'id',
                caption: 'ID',
                dataType: 'number',
                sortOrder: 'desc',
                visible: false
            },
            {
                dataField: 'name',
                caption: 'Name',
                alignment: 'left',
                cellTemplate: function (container, options) {
                    displayNoData(container, options);
                }
            },
            {
                dataField: 'nickname',
                caption: 'Nickname',
                alignment: 'left',
                cellTemplate: function (container, options) {
                    displayNoData(container, options);
                },
                visible: false
            },
            {
                dataField: 'weight',
                caption: 'Weight',
                alignment: 'left',
                cellTemplate: function (container, options) {
                    container.text(options.value + ' kg');
                }
            },
            {
                dataField: 'height',
                caption: 'Height',
                alignment: 'left',
                cellTemplate: function (container, options) {
                    container.text(options.value + ' cm');
                }
            },
            { dataField: 'genderName', caption: 'Gender' },
            {
                dataField: 'color',
                caption: 'Color',
                alignment: 'left',
                cellTemplate: function (container, options) {
                    displayNoData(container, options);
                },
                visible: false
            },
            {
                dataField: 'friendlinessName',
                caption: 'Friendliness',
                alignment: 'left',
                cellTemplate: function (container, options) {
                    displayNoData(container, options);
                }
            },
            {
                dataField: 'birthday',
                caption: 'Birthday',
                alignment: 'left',
                cellTemplate: function (container, options) {
                    var date = new Date(options.value);
                    var formattedDate = new Intl.DateTimeFormat('en-US', { 
                        year: 'numeric', 
                        month: 'long', 
                        day: 'numeric' 
                    }).format(date);

                    container.text(formattedDate);
                }
            },
            {
                caption: 'Action',
                alignment: 'center',
                cellTemplate: function (container, options) {
                    $('<a>')
                        .addClass('btn btn-dark btn-sm')
                        .text('Edit')
                        .on('click', function () {
                            openEditModal(options.data);
                        })
                        .appendTo(container);
                }
            },
        ],
        showBorders: true,
        searchPanel: {
            visible: true,
            width: 250,
            placeholder: 'Search...',
            customizeColumns: function(columns) {
                columns[0].editorOptions = {
                    inputAttr: {
                        'class': 'custom-search-box',
                    }
                };
            }
        },
        paging: {
            enabled: true
        },
        pager: {
            showPageSizeSelector: true,
            allowedPageSizes: [5, 10, 20],
            showInfo: true
        }
    });

    $('.dx-datagrid-search-panel').addClass('custom-search-box');

    /**
     * Retrieves the gender name based on the provided value
     *
     * @param {string} value 
     * @returns {string}
     */
    function getGenderName(value)
    {
        return genderEnum[value];
    }

    /**
     * Retrieves the friendliness name based on the provided value
     *
     * @param {string} value 
     * @returns {string}
     */
    function getFriendlinessName(value)
    {
        return friendlinessEnum[value];
    }

    $.each(kangaroos, function(index, item) {
        item.genderName = getGenderName(item.gender);
        item.friendlinessName = getFriendlinessName(item.friendliness);
    });

    /**
     * Opens the modal for editing kangaroo data
     *
     * @param {Array} data
     */
    function openEditModal(data) {
        /**
         * Populates the form fields in the edit modal with the provided kangaroo data
         *
         * @param {number} id
         * @param {string} name
         * @param {string} nickname
         * @param {number} weight
         * @param {number} height
         * @param {number} gender
         * @param {number} color
         * @param {number} friendliness
         * @param {date} birthday
         */
        function populateModalFields(id, name, nickname, weight, height, gender, color, friendliness, birthday) {
            $('#recordId').val(id);
            $('#nameEdit').val(name);
            $('#nicknameEdit').val(nickname);
            $('#weightEdit').val(weight);
            $('#heightEdit').val(height);
            $('#genderEdit').val(gender);
            $('#colorEdit').val(color);
            $('#friendlinessEdit').val(friendliness);
            $('#birthdayEdit').val(birthday);
        }

        populateModalFields(
            data.id,
            data.name,
            data.nickname,
            data.weight,
            data.height,
            data.gender,
            data.color,
            data.friendliness,
            data.birthday
        );

        $('#modalEditKangaroo').modal('show');
    }

    /**
     * Displays "No data" or the provided value in the specified container
     *
     * @param {HTMLElement} container 
     * @param {*} options 
     */
    function displayNoData(container, options)
    {
        if (options.value === undefined || options.value === null || options.value === '') {
            container.addClass('italic');
            container.text('No data');
        } else {
            container.removeClass('italic');
            container.addClass('word-wrap-cell');
            container.text(options.value);
        }
    }
}