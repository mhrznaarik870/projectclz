const wrapper = document.querySelector(".wrapper");
const loginlink = document.querySelector(".login-link");
const registerlink = document.querySelector(".register-link");
const popup = document.querySelector(".btnlogin-popup");
const close = document.querySelector(".icon-close");
const registerWrapper = document.querySelector(".register-wrapper");
const loginWrapper = wrapper.querySelector(".login");

registerlink.addEventListener("click", () => {
  registerWrapper.classList.toggle("d-none");
  loginWrapper.classList.add("d-none");
});

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

document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    wrapper.classList.remove("active");
  }
});

// Add event listener for login button
const loginButton = document.querySelector(".btnlogin-popup");
loginButton.addEventListener("click", () => {
  const wrapper = document.querySelector(".big-wrapper");
  wrapper.classList.toggle("show-register-wrapper");
});

// Add event listener for register link in login form
const registerLink = document.querySelector(".register-link");
registerLink.addEventListener("click", (e) => {
  e.preventDefault();
  const wrapper = document.querySelector(".big-wrapper");
  wrapper.classList.add("show-register-wrapper");
});

// Add event listener for login link in registration form
const loginLink = document.querySelector(".login-link");
loginLink.addEventListener("click", (e) => {
  e.preventDefault();
  const wrapper = document.querySelector(".big-wrapper");
  wrapper.classList.remove("show-register-wrapper");
});

// Add event listener for close button in registration form
const closeButton = document.querySelector(".icon-close");
closeButton.addEventListener("click", () => {
  const wrapper = document.querySelector(".big-wrapper");
  wrapper.classList.remove("show-register-wrapper");
});
