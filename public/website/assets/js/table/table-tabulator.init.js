//basic table
var table = new Tabulator("#basicTable", {
    height: "311px",
    layout: "fitDataStretch",
    resizableColumnFit: true,
    data: [
        { id: 1, name: "Billy Bob", age: 12, gender: "male", height: 95, col: "red", dob: "14/05/2010" },
        { id: 2, name: "Jenny Jane", age: 42, gender: "female", height: 142, col: "blue", dob: "30/07/1954" },
        { id: 3, name: "Steve McAlistaire", age: 35, gender: "male", height: 176, col: "green", dob: "04/11/1982" },
        { id: 4, name: "Emma Watson", age: 32, gender: "female", height: 165, col: "purple", dob: "15/04/1990" },
        { id: 5, name: "John Doe", age: 28, gender: "male", height: 180, col: "orange", dob: "22/09/1995" },
        { id: 6, name: "Alice Smith", age: 24, gender: "female", height: 160, col: "pink", dob: "10/12/1999" },
        { id: 7, name: "Michael Johnson", age: 40, gender: "male", height: 175, col: "brown", dob: "05/03/1983" },
        { id: 8, name: "Sarah Brown", age: 29, gender: "female", height: 168, col: "cyan", dob: "18/07/1994" },
        { id: 9, name: "David Wilson", age: 45, gender: "male", height: 182, col: "gray", dob: "12/11/1978" },
        { id: 10, name: "Laura Davis", age: 31, gender: "female", height: 170, col: "magenta", dob: "25/02/1992" },
    ],
    columns: [
        { title: "Name", field: "name", width: 280, resizable: true },
        { title: "Gender", field: "gender", width: 280, resizable: true },
        { title: "Height", field: "height", width: 280, resizable: true },
        { title: "Favorite Color", field: "col", width: 280, resizable: true },
        { title: "Date Of Birth", field: "dob", width: 240, resizable: true },
    ],
});

//pagination with table
var table = new Tabulator("#paginationSortingTable", {
    layout: "fitDataStretch",
    pagination: "local",
    paginationSize: 6,
    paginationSizeSelector: [3, 6, 8, 10],
    movableColumns: true,
    paginationCounter: "rows",
    data: [
        { id: 1, name: "Billy Bob", age: 12, gender: "male", height: 95, col: "red", dob: "14/05/2010" },
        { id: 2, name: "Jenny Jane", age: 42, gender: "female", height: 142, col: "blue", dob: "30/07/1954" },
        { id: 3, name: "Steve McAlistaire", age: 35, gender: "male", height: 176, col: "green", dob: "04/11/1982" },
        { id: 4, name: "Emma Watson", age: 32, gender: "female", height: 165, col: "purple", dob: "15/04/1990" },
        { id: 5, name: "John Doe", age: 28, gender: "male", height: 180, col: "orange", dob: "22/09/1995" },
        { id: 6, name: "Alice Smith", age: 24, gender: "female", height: 160, col: "pink", dob: "10/12/1999" },
        { id: 7, name: "Michael Johnson", age: 40, gender: "male", height: 175, col: "brown", dob: "05/03/1983" },
        { id: 8, name: "Sarah Brown", age: 29, gender: "female", height: 168, col: "cyan", dob: "18/07/1994" },
        { id: 9, name: "David Wilson", age: 45, gender: "male", height: 182, col: "gray", dob: "12/11/1978" },
        { id: 10, name: "Laura Davis", age: 31, gender: "female", height: 170, col: "magenta", dob: "25/02/1992" },
    ],
    columns: [
        { title: "Name", width: 280, field: "name" },
        { title: "Gender", width: 280, field: "gender" },
        { title: "Height", width: 280, field: "height" },
        { title: "Favorite Color", width: 280, field: "col" },
        { title: "Date Of Birth", width: 240, field: "dob", },
    ],
});

//Nested Data Trees
var tableDataNested = [
    {
        name: "Oli Bob", location: "United Kingdom", gender: "male", col: "red", dob: "14/04/1984", _children: [
            { name: "Mary May", location: "Germany", gender: "female", col: "blue", dob: "14/05/1982" },
            { name: "Christine Lobowski", location: "France", gender: "female", col: "green", dob: "22/05/1982" },
            {
                name: "Brendon Philips", location: "USA", gender: "male", col: "orange", dob: "01/08/1980", _children: [
                    { name: "Margret Marmajuke", location: "Canada", gender: "female", col: "yellow", dob: "31/01/1999" },
                    { name: "Frank Harbours", location: "Russia", gender: "male", col: "red", dob: "12/05/1966" },
                ]
            },
        ]
    },
    { name: "Jamie Newhart", location: "India", gender: "male", col: "green", dob: "14/05/1985" },
    {
        name: "Gemma Jane", location: "China", gender: "female", col: "red", dob: "22/05/1982", _children: [
            { name: "Emily Sykes", location: "South Korea", gender: "female", col: "maroon", dob: "11/11/1970" },
        ]
    },
    { name: "James Newman", location: "Japan", gender: "male", col: "red", dob: "22/03/1998" },
];

var table = new Tabulator("#nestingDateTreesTable", {
    layout: "fitDataStretch",
    data: tableDataNested,
    dataTree: true,
    dataTreeStartExpanded: true,
    columns: [
        { title: "Name", field: "name", width: 280, responsive: 0 }, //never hide this column
        { title: "Location", field: "location", width: 280, },
        { title: "Gender", field: "gender", width: 280, responsive: 2 }, //hide this column first
        { title: "Favourite Color", field: "col", width: 280, },
        { title: "Date Of Birth", field: "dob", width: 240, hozAlign: "center", sorter: "dob" },
    ],
});

//Create Data Editor
var dateEditor = function (cell, onRendered, success, cancel) {
    //cell - the cell component for the editable cell
    //onRendered - function to call when the editor has been rendered
    //success - function to call to pass the successfully updated value to Tabulator
    //cancel - function to call to abort the edit and return to a normal cell

    //create and style input
    var cellValue = luxon.DateTime.fromFormat(cell.getValue(), "dd/MM/yyyy").toFormat("yyyy-MM-dd"),
        input = document.createElement("input");

    input.setAttribute("type", "date");

    input.style.padding = "4px";
    input.style.width = "100%";
    input.style.boxSizing = "border-box";

    input.value = cellValue;

    onRendered(function () {
        input.focus();
        input.style.height = "100%";
    });

    function onChange() {
        if (input.value != cellValue) {
            success(luxon.DateTime.fromFormat(input.value, "yyyy-MM-dd").toFormat("dd/MM/yyyy"));
        } else {
            cancel();
        }
    }

    //submit new value on blur or change
    input.addEventListener("blur", onChange);

    //submit new value on enter
    input.addEventListener("keydown", function (e) {
        if (e.keyCode == 13) {
            onChange();
        }

        if (e.keyCode == 27) {
            cancel();
        }
    });

    return input;
};


//Build Tabulator
var table = new Tabulator("#example-table", {
    height: "311px",
    layout: "fitDataStretch",
    data: [
        { id: 1, name: "Billy Bob", location: "China", age: 12, gender: "male", height: 95, col: "red", dob: "14/05/2010" },
        { id: 2, name: "Jenny Jane", location: "United States", age: 42, gender: "female", height: 142, col: "blue", dob: "30/07/1954" },
        { id: 3, name: "Steve McAlistaire", location: "Mexico", age: 35, gender: "male", height: 176, col: "green", dob: "04/11/1982" },
        { id: 4, name: "Emma Watson", location: "Brazil", age: 32, gender: "female", height: 165, col: "purple", dob: "15/04/1990" },
        { id: 5, name: "John Doe", location: "Russia", age: 28, gender: "male", height: 180, col: "orange", dob: "22/09/1995" },
        { id: 6, name: "Alice Smith", location: "Indonesia", age: 24, gender: "female", height: 160, col: "pink", dob: "10/12/1999" },
        { id: 7, name: "Michael Johnson", location: "Turkey", age: 40, gender: "male", height: 175, col: "brown", dob: "05/03/1983" },
        { id: 8, name: "Sarah Brown", location: "Philippines", age: 29, gender: "female", height: 168, col: "cyan", dob: "18/07/1994" },
        { id: 9, name: "David Wilson", location: "China", age: 45, gender: "male", height: 182, col: "gray", dob: "12/11/1978" },
        { id: 10, name: "Laura Davis", location: "Brazil", age: 31, gender: "female", height: 170, col: "magenta", dob: "25/02/1992" },
    ],
    columns: [
        { title: "Name", field: "name", width: 280, editor: "input" },
        { title: "Location", field: "location", width: 280, editor: "list", editorParams: { autocomplete: "true", allowEmpty: true, listOnEmpty: true, valuesLookup: true } },
        { title: "Gender", field: "gender", editor: "list", editorParams: { values: { "male": "Male", "female": "Female", "Others": "Others" } } },
        {
            title: "Rating",
            field: "rating",
            formatter: function (cell, formatterParams, onRendered) {
                var value = cell.getValue();
                var stars = "";
                for (var i = 1; i <= 5; i++) {
                    var starClass = i <= value ? "ri-star-fill active" : "ri-star-line";
                    stars += `<span class="${starClass}" data-rating="${i}" style="cursor: pointer; color: ${i <= value ? 'var(--dx-warning)' : 'var(--dx-secondary-color)'}; margin-right: 5px;"></span>`;
                }
                return stars;
            },
            cellClick: function (e, cell) {
                var rating = e.target.getAttribute("data-rating");
                if (rating) {
                    cell.setValue(rating); // Update the rating value
                }
            },
            hozAlign: "center",
            width: 280,
            editor: true,
        },
        { title: "Date Of Birth", field: "dob", width: 280, hozAlign: "center", sorter: "date", width: 140, editor: dateEditor },
        { title: "Driver", field: "car", width: 280, hozAlign: "center", editor: true, formatter: "tickCross" },
    ],
});