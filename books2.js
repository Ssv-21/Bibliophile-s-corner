let audios = [
  "12Rules_for_life.mp3",
  "dont_sweat.mp3",
  "Atomic_Habits.mp3",
  "The_5AM_Club.mp3",
];

let audiopics = [
  "https://m.media-amazon.com/images/I/41O3AH0L38L.jpg",
  "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1333059662l/13565963.jpg",
  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfLr_tG8AYA5MK-pp_XBrNthvL_o0PGDev0A&usqp=CAU",
  "https://images-na.ssl-images-amazon.com/images/I/81Nlt+KjHhL.jpg",
];

function audio(event) {
  let p = event.target.value;
  console.log(p);
  localStorage.setItem("key", p);
}

let q = parseInt(localStorage.getItem("key"));
console.log(q);
console.log(audios[q - 1]);
let z = document.getElementById("tags").innerHTML;
z += `<source id="source1" src="../audios/${audios[q - 1]}" type="audio/ogg">
<source id="source2" src="../audios/${audios[q - 1]}" type="audio/mp3">`;
document.getElementById("tags").innerHTML = z;
z = document.getElementById("tags");
document.getElementById("audiopics").style.backgroundImage = `url('${
  audiopics[q - 1]
}')`;
console.log(z);
