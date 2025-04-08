

function toggleAuthModal() {
    const modal = document.getElementById('authModal');
    modal.style.display = modal.style.display === 'block' ? 'none' : 'block';
  }
  
  function toggleAuthStatus() {
    const authStatus = document.getElementById('authStatus');
    authStatus.style.display =
      authStatus.style.display === 'block' ? 'none' : 'block';
  }

  function toggleAuthStatus() {
    const dropdown = document.getElementById("authStatus");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  }
  
  // Optional: Close authStatus if clicked outside
  window.addEventListener('click', function (e) {
    const profile = document.querySelector('.profile');
    const authStatus = document.getElementById('authStatus');
  
    if (!profile.contains(e.target) && !authStatus.contains(e.target)) {
      authStatus.style.display = 'none';
    }
  });
  


  // Check if username exists in localStorage
  window.addEventListener("DOMContentLoaded", () => {
    const username = sessionStorage.getItem("username");
    if (username) {
      document.getElementById("profileText").innerText = username;
    }
  });
  