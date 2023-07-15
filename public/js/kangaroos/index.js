export function tableKangaroo() {
    $('#dataGrid').dxDataGrid({
        dataSource: kangaroos,
        columns: [
            { dataField: 'name', caption: 'Name' },
            {
                dataField: 'nickname',
                caption: 'Nickname',
                cellTemplate: function (container, options) {
                    displayNoData(container, options);
                }
            },
            { dataField: 'weight', caption: 'Weight' },
            { dataField: 'height', caption: 'Height' },
            { dataField: 'gender', caption: 'Gender' },
            {
                dataField: 'color',
                caption: 'Color',
                cellTemplate: function (container, options) {
                    displayNoData(container, options);
                }
            },
            {
                dataField: 'friendliness',
                caption: 'Friendliness',
                cellTemplate: function (container, options) {
                    displayNoData(container, options);
                }
            },
            { dataField: 'birthday', caption: 'Birthday' },
            {
                caption: 'Action',
                cellTemplate: function (container, options) {
                    $('<a>')
                        .addClass('btn btn-primary btn-sm')
                        .text('Edit')
                        .on('click', function () {
                            openEditModal(options.data);
                        })
                        .appendTo(container);
                }
            },
        ],
        showBorders: true,
        wordWrapEnabled: true,
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
     * Opens the kangaroo data in modal during edit 
     *
     * @param {*} data 
     */
    function openEditModal(data)
    {
        $('#recordId').val(data.id);
        $('#editName').val(data.name);
        $('#editNickname').val(data.nickname);
        $('#editWeight').val(data.weight);
        $('#editHeight').val(data.height);
        $('#editGender').val(data.gender);
        $('#editColor').val(data.color);
        $('#editFriendliness').val(data.friendliness);
        $('#editBirthday').val(data.birthday);

        $('#modalEditKangaroo').modal('show');
    }

    /**
     * Displays no data
     *
     * @param {*} container 
     * @param {*} options 
     */
    function displayNoData(container, options)
    {
        if (options.value === undefined || options.value === null || options.value === '') {
            container.addClass('italic');
            container.text('No data');
        } else {
            container.removeClass('italic');
            container.text(options.value);
        }
    }
}