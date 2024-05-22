const pageLogin = document.querySelector(".page-login");
const pageRegistrasi = document.querySelector(".page-registrasi");

pageLogin.addEventListener("click", () => {
  pageLogin.style.backgroundColor = "#CDFCF6";
  pageRegistrasi.style.backgroundColor = "transparent";
});
pageRegistrasi.addEventListener("click", () => {
  pageRegistrasi.style.backgroundColor = "#CDFCF6";
  pageLogin.style.backgroundColor = "transparent";
});
