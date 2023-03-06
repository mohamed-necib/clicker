//SELECTEURS
const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const btnRegister = document.querySelector(".nav-register-section");
const closeIcon = document.querySelector(".icon-close");
const registerForm = document.querySelector("#register-form");
const loginForm = document.querySelector("#login-form");

// EVENT LISTENERS

registerLink.addEventListener("click", () => {
  wrapper.classList.add("active");
});

registerForm.addEventListener("submit", (e) => {
  e.preventDefault();
  insFormData = new FormData(registerForm);
  insFormData.append("id", "register-form");
  fetch("index.php", {
    method: "POST",
    body: insFormData,
  }).then((resp) => {
    if (resp.ok) {
      return resp.json();
    }
  });
});

loginLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();
  e.preventDefault();
  connFormData = new FormData(loginForm);
  connFormData.append("id", "loginForm");
  fetch("index.php", {
    method: "POST",
    body: connFormData,
  })
    .then((resp) => {
      if (resp.ok) {
        return resp.json();
      }
    })
    .then((json) => {
      if (json["response"] == "ok_connexion") {
        setTimeout(function () {
          window.location.href = "game.php";
        }, 2000);
      }
    });
});

btnRegister.addEventListener("click", () => {
  wrapper.classList.add("active-popup");
});

closeIcon.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
});
