let info = [];
let index = 0;
function insert() {
  let x = document.getElementById("textbox").value;
  index = info.length;
  console.log(x);
  if (x == "") {
    document.getElementById("textbox").placeholder = "Enter your text here";
    return;
  }
  console.log(index);
  let add = document.getElementById("libtable").innerHTML;
  if (info.length == 0) {
    add = "";
  }
  info[index] = x;
  console.log(add);
  add += `<div id="notebox">
  <span class="hdnote" id="headnote">Note${index + 1}</span>
  <p id="text">${info[index]}</p>
  <button class="delval" onclick="del(event)" id="delbutton" value="${
    index + 1
  }">Delete Note</button></div>`;
  document.getElementById("libtable").innerHTML = add;
  console.log(info);
}

function positioning() {
  let tot = "";
  for (let i = 0; i < info.length; i++) {
    tot += `<div id="notebox">
  <span class="hdnote" id="headnote">Note${i + 1}</span>
  <p id="text">${info[i]}</p>
  <button class="delval" onclick="del(event)" id="delbutton" value="${
    i + 1
  }">Delete Note</button></div>`;
  }
  document.getElementById("libtable").innerHTML = tot;
  if (info.length == 0) {
    document.getElementById("libtable").innerHTML = `Nothing to show! 
    Use "Add a Note" section above to add notes.`;
  }
  console.log(document.getElementById("libtable").innerHTML);
}

function del(event) {
  let d = event.target.value;
  console.log("deleting div has button value => " + d);
  info.splice(d - 1, 1);
  event.target.parentNode.remove();
  console.log(info);
  positioning();
}
// document.getElementById("done").style.display="none";