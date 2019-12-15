$(document).ready(function() {

    //console.log(window.tableCols);

    window.tabulatorTable = new Tabulator("#" + window.selector_table_id, {
        height: "292px",
        layout: "fitColumns",
        //pagination: "local",
        //paginationSize: 20,
        //paginationSizeSelector: [3, 6, 8, 10],
        movableColumns: true,
        columns: window.tableCols,
        // columns: [
        //     {title: "Last Name", field: "last_name", width: 200},
        //     {title: "First Name", field: "first_name", width: 200},
        //     //{title: "Progress", field: "progress", formatter: "progress", sorter: "number"},
        //     //{title: "Gender", field: "gender"},
        //     //{title: "Rating", field: "rating", formatter: "star", align: "center", width: 100},
        //     //{title: "Favourite Color", field: "col"},
        //     //{title: "Date Of Birth", field: "dob", align: "center", sorter: "date"},
        //     //{title: "Driver", field: "car", align: "center", formatter: "tickCross"},
        // ],
    });



});