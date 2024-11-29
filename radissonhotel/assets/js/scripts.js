function toggleDropdown(event) {
  event.preventDefault();
  const dropdownMenu = document.getElementById("dropdownMenu");
  dropdownMenu.classList.toggle("show");
}
  
  // Close dropdown if clicked outside
  document.addEventListener("click", function (event) {
    const dropdownMenu = document.getElementById("dropdownMenu");
    const profileDropdown = document.getElementById("profileDropdown");
  
    if (
      !dropdownMenu.contains(event.target) &&
      !profileDropdown.contains(event.target)
    ) {
      dropdownMenu.classList.remove("show");
    }
  });
  
  function openEditProfile() {
    alert("Open Edit Profile Modal"); // Replace with actual modal logic
  }
  
  function logout() {
    alert("Logging out...");
    // Add actual logout logic
  }
  