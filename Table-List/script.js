var originalData = [
    ["1", " ", " ", " "],
    ["2",  " ", " ", " "],
    ["3", " ", " ", " "],
    ["4", " ", " ", " "],
    ["5", " ", " ", " "],
];

function populateTable() {
    var tbody = document.getElementById("studentTable").getElementsByTagName("tbody")[0];
    originalData.forEach(function(rowData) {
        var row = document.createElement("tr");
        rowData.forEach(function(cellData) {
            var cell = document.createElement("td");
            cell.textContent = cellData;
            cell.className = "editable";
            cell.onclick = function() { editCell(this); };
            row.appendChild(cell);
        });
        tbody.appendChild(row);
    });
}

function editCell(cell) {
    var currentValue = cell.innerText;
    cell.innerHTML = `<input type="text" value="${currentValue}" onblur="saveCell(this)">`;
    cell.querySelector("input").focus();
}

function saveCell(input) {
    var newValue = input.value;
    input.parentNode.innerText = newValue;
}

function resetTable() {
    var tbody = document.getElementById("studentTable").getElementsByTagName("tbody")[0];
    tbody.innerHTML = "";
    populateTable();
}

populateTable();

document.getElementById("loadListButton").addEventListener("click", resetTable);
