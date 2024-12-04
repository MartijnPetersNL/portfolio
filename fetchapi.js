// fetch("todosnovember.json")
//   .then((response) => {
//     console.log("Fetch resolved:", response);
//     return response.json();
//   })
//   .then((data) => {
//     console.log(data);
//   })
//   .catch((error) => {
//     console.log("Fetch rejected:", error);
//   }); //returns promise (resolve, reject)

// Async & await
const getTodos = async () => {
  const response = await fetch("todosnovember.json");
  if (response.status !== 200) {
    throw new Error("Cannot fetch data");
  }
  const data = await response.json();
  const response_2 = await fetch("todos.json");
  const data_2 = await response_2.json();
  const response_3 = await fetch("todosjanuary.json");
  const data_3 = await response_3.json();
  return [data, data_2, data_3];
};

console.log(1);
console.log(2);

getTodos()
  .then((data) => {
    console.log("resolved:", data);
  })
  .catch((error) => console.log("Rejected:", error.message));

getTodos()
  .then((data) => {
    console.log("resolved 2:", data[1]);
  })
  .catch((error) => console.log("Rejected 2:", error.message));

getTodos()
  .then((data) => {
    console.log("resolved 3:", data[2]);
  })
  .catch((error) => console.log("Rejected 3:", error.message));

console.log(3);
console.log(4);

// const test = getTodos();
// console.log("Fetch test:", test);
