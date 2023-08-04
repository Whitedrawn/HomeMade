
const dropButton=document.getElementById("dropB");
function dropHandler() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
dropButton.addEventListener('click',dropHandler)