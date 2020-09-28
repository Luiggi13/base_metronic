"use strict";
// Class definition

var KTDefaultDatatableDemo = function () {
	// Private functions

	// basic demo
	var demo = function () {

		var datatable = $('#kt_datatable').KTDatatable({
			data: {
				type: 'remote',
				source: {
                    read: {
                        method: 'GET',
                        url: 'https://5f63180d363f0000162d81c7.mockapi.io/api/v1/tables',
                    },
				},
				pageSize: 20,
				serverPaging: true,
				serverFiltering: true,
				serverSorting: true
			},

			layout: {
				scroll: true,
				height: 550,
				footer: false
			},

			sortable: true,

			filterable: false,

			pagination: true,

			search: {
				input: $('#kt_datatable_search_query')
			},

			columns: [
				{
					field: 'RecordID',
					title: '#',
					sortable: false,
					width: 20,
					type: 'number',
					selector: false,
					textAlign: 'center',
				}, {
					field: 'zona',
					title: 'Zona',
				}, {
					field: 'entry',
					title: 'Entrada',
					// template: function(row) {
					// 	return row.Country + ' ' + row.ShipCountry;
					// },
				}, {
					field: 'valueMachine',
					width: 150,
					title: 'Valor',
				}, {
					field: 'machineHour',
					title: 'Hora de la máquina',
				}]

		});

		$('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

   };

	return {
		// public functions
		init: function () {
			demo();
		}
	};
}();

jQuery(document).ready(function () {
	KTDefaultDatatableDemo.init();
});
