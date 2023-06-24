const wrapper = document.querySelector(".wrapper");
const loginlink = document.querySelector(".login-link");
const registerlink = document.querySelector(".register-link");
const popup = document.querySelector(".btnlogin-popup");
const close = document.querySelector(".icon-close");
const registerWrapper = document.querySelector(".register-wrapper");
const loginWrapper = wrapper.querySelector(".login");

registerlink.addEventListener("click", () => {
  registerWrapper.classList.remove("d-none");
  loginWrapper.classList.add("d-none");
});
loginlink.addEventListener("click", () => {
  registerWrapper.classList.add("d-none");
  loginWrapper.classList.remove("d-none");
});

popup.addEventListener("click", () => {
  wrapper.classList.add("active");
});

close.addEventListener("click", () => {
  wrapper.classList.remove("active");
});

// Get all nav-link elements
// const navLinks = document.querySelectorAll(".nav-link");

// // Loop through each nav-link
// navLinks.forEach((navLink) => {
//   // Add click event listener
//   navLink.addEventListener("click", function () {
//     // Remove the "active" class from all nav-links
//     navLinks.forEach((link) => {
//       link.classList.remove("active");
//     });

//     // Add the "active" class to the clicked nav-link
//     this.classList.add("active");
//   });
// });
