import "./bootstrap";
import 'datatables.net-bs5';
import 'datatables.net-buttons-bs5';
import.meta.glob(["../images/**"]);

var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
    sidebar.classList.toggle("active-nav");
    container.classList.toggle("active-cont");
});