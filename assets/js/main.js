// const sidebarToggle = document.getElementById("#sidebarToggle");
// const sidebarMenu = document.getElementById("#sidebarMenu");

// sidebarToggle.addEventListener("click", function () {
// 	sidebarMenu.classList.toggle("sidebar-hidden");
// });

$("#sidebarToggle").on("click", function () {
	$("#sidebar-content-wrapper").toggleClass("sidebar-hidden");
});
