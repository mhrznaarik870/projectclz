document.addEventListener("DOMContentLoaded", () => {
  const wrapper = document.querySelector(".wrapper");
  const loginLink = document.querySelector(".login-link");
  const registerLink = document.querySelector(".register-link");
  const popup = document.querySelector(".btnlogin-popup");
  const close = document.querySelector(".icon-close");
  const registerWrapper = document.querySelector(".register-wrapper");
  const loginWrapper = wrapper.querySelector(".login");

  registerLink.addEventListener("click", () => {
    registerWrapper.classList.toggle("d-none");
    loginWrapper.classList.add("d-none");
  });

  loginLink.addEventListener("click", () => {
    registerWrapper.classList.add("d-none");
    loginWrapper.classList.remove("d-none");
  });

  popup.addEventListener("click", () => {
    wrapper.classList.add("active");
  });

  close.addEventListener("click", () => {
    wrapper.classList.remove("active");
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      wrapper.classList.remove("active");
    }
  });

  // Add event listener for dropdown toggle
  const dropdownToggle = document.querySelector(".dropdown-toggle");
  const dropdownMenu = document.querySelector(".dropdown-menu");

  dropdownToggle.addEventListener("click", () => {
    dropdownMenu.classList.toggle("show");
  });

  document.addEventListener("click", (event) => {
    if (!event.target.closest("#userDropdown")) {
      dropdownMenu.classList.remove("show");
    }
  });
});
