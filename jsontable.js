fetch("todosnovember.json")
  .then((response) => response.json())
  .then((data) => generateTable(data, "#table1 tbody"))
  .catch((error) => console.error("Error fetching JSON:", error));
fetch("todos.json")
  .then((response) => response.json())
  .then((data) => generateTable(data, "#table2 tbody"))
  .catch((error) => console.error("Error fetching JSON:", error));
function generateTable(data, tableBodySelector) {
  const tableBody = document.querySelector(tableBodySelector);
  data.forEach((item) => {
    const row = document.createElement("tr");
    row.innerHTML = `<td>${item.text}</td> <td>${item.user}</td> <td>${item.date}</td>`;
    tableBody.appendChild(row);
  });
}
