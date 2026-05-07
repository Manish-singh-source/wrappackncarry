document.addEventListener("DOMContentLoaded", () => {

  var table = document.querySelector('[data-tables="export-data-dropdown"]');

  if (table) {

    new DataTable(table, {

      // Left side = Show entries + Export
      // Right side = Search
      dom: "<'d-md-flex justify-content-between align-items-center my-2'<'d-flex align-items-center gap-2'lB>f>rt<'d-md-flex justify-content-between align-items-center mt-2'ip>",

      responsive: true,

      // Descending order by ID
      order: [[0, "desc"]],

      // Entries options
      lengthMenu: [
        [10, 30, 50, 100, -1],
        [10, 30, 50, 100, "All"]
      ],

      pageLength: 10,

      buttons: [
        {
          extend: "collection",

          text:
            '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1 align-baseline"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"/><path d="M7 11l5 5l5 -5"/><path d="M12 4l0 12"/></svg> Export',

          className: "btn btn-sm btn-secondary dropdown-toggle",

          autoClose: true,

          buttons: [
            { extend: "copy", text: "Copy" },
            { extend: "csv", text: "CSV" },
            { extend: "excel", text: "Excel" },
            { extend: "print", text: "Print" },
            { extend: "pdf", text: "PDF" },
          ],
        },
      ],

      language: {

        lengthMenu: "Show _MENU_ entries",

        search: "Search:",

        paginate: {
          first:
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 7l-5 5l5 5"/><path d="M17 7l-5 5l5 5"/></svg>',

          previous:
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 6l-6 6l6 6"/></svg>',

          next:
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6l6 6l-6 6"/></svg>',

          last:
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 7l5 5l-5 5"/><path d="M13 7l5 5l-5 5"/></svg>',
        },
      },
    });

  }

});