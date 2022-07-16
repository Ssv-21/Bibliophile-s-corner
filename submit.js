function sleep(milliseconds) {
    const date = Date.now();
    let currentDate = null;
    do {
      currentDate = Date.now();
    } while (currentDate - date < milliseconds);
  }
  
  
  function update() {
    document.getElementById("done").style.display="none";
    sleep(1500);
  }
  
  function update1() {
  
    setTimeout(function () {
      update();

    }, 1000);
  
  }
  
  function waiting1() {
    setTimeout(function () {
      update1();
    }, 10);
    sleep(10);
  }
  waiting1();