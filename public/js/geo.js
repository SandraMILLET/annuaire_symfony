

function Geo() {

  console.log("hohé y kkun ?");


  const successCallback = (position) => {
    document.getElementById("js").style.visibility = "visible"



    let dis = document.getElementById("js").innerHTML = " Vous avez accepté la localisation sur ce site !" + "<button class='but btn btn-outline-light'> OK</button>";

    console.log(position);
  }
  const errorCallback = (error) => {
    document.getElementById("js").style.visibility = "visible";
    document.getElementById("js").style.backgroundColor = "rgba(250, 0, 0, 0.52)";
    let dis = document.getElementById("js").innerHTML = " Vous avez refusé la localisation sur ce site !" + "<button class='but btn btn-outline-light'> OK</button>";

    console.error(error);
  }

  navigator.geolocation.getCurrentPosition(successCallback, errorCallback, {

    enableHighAccuracy: true,
    timeout: 5000
  });

}

function display() {

  let div = document.getElementById("js");
  if (div.style.display = "block") {
    div.style.display = "none";
  }
}