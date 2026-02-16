document.addEventListener("DOMContentLoaded", function () {
  // Close the sidebar and overlay if overlay is clicked
  overlay.addEventListener("click", closeSidebar);

  // Close the sidebar and overlay if sidebar link is clicked
  const sidebarLinks = document.querySelectorAll("#logo-sidebar a");
  sidebarLinks.forEach(function (link) {
    link.addEventListener("click", closeSidebar);
  });
});
