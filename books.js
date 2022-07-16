let pdfs = [
  "Daring_greatly.pdf",
  "How_to_change_your _mind.pdf",
  "Rich_dad_poor_dad.pdf",
  "Think_and_grow_rich.pdf",
  "Software_eng1.pdf",
  "Software_eng2.pdf",
];

let x;
function pdffunc(event) {
  x = event.target.value;
  console.log(x);
  localStorage.setItem("val", x);
}
let y = parseInt(localStorage.getItem("val"));
console.log(y);
document.getElementById("pdf").src = `../pdfs/${pdfs[y - 1]}`;
