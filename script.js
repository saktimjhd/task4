document
  .getElementById("registrationForm")
  .addEventListener("submit", function (event) {
    const fileInput = document.getElementById("file");
    const file = fileInput.files[0];

    if (file && file.size > 500000) {
      alert("Ukuran file maksimal 500KB.");
      event.preventDefault();
      return;
    }

    if (file && !file.name.endsWith(".txt")) {
      alert("Hanya file teks (.txt) yang diperbolehkan.");
      event.preventDefault();
    }
  });
