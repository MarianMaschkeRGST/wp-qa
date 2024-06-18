//QA Blocks
const coll = document.getElementsByClassName("q-block");
let i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let content = this.nextElementSibling;
    content.classList.toggle("active-a")
  });
}