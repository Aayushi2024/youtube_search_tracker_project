const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

document
  .querySelector(".sign-up-form")
  .addEventListener("submit", function (e) {
    const password = document.getElementById("newPassword").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    // Regex: at least one letter and one digit
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d).+$/;

    if (!passwordRegex.test(password)) {
      alert("Password must contain at least one letter and one number.");
      e.preventDefault(); // Prevent form submission
      return;
    }

    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      e.preventDefault(); // Prevent form submission
    }
  });
