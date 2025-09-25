const email = document.getElementById("email");
const password = document.getElementById("password");

// Email Validation live
email.addEventListener("input", () => {
  const regex = /^[^\s@]{2,}@[^\s@]+\.[^\s@]{2,}$/;

  document.getElementById("emailError").textContent = !regex.test(
    email.value.trim()
  )
    ? " Enter a valid Email"
    : "";
});

// Password validation live
password.addEventListener("input", () => {
  const regex = /^(?=.*[A-Z])(?=.*[^A-Za-z0-9]).{8,}$/;

  document.getElementById("passwordError").textContent = regex.test(
    password.value
  )
    ? ""
    : "Min. 8 chars: 1 capital + 1 special";
});
