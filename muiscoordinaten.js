let positie = document.querySelector(".mouseEvent");
window.addEventListener("mousemove", (e) => {
  let xPositie = e.clientX;
  let yPositie = e.clientY;
  const mouseEvent = document.querySelector(".mouseEvent");
  //   console.log(xPositie, yPositie);
  mouseEvent.innerHTML = `<div><p>Mouse X Position(px)</p><br><span>${xPositie}</span></div>
  <div><p>Mouse Y Position(px)</p><br><span>${yPositie}</span></div>`;
});
function mouseTracker() {}
