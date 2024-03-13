document.addEventListener("DOMContentLoaded", function () {
  var form = document.querySelector("form");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      // Get the form data
      var rows = document.querySelector('input[name="rows"]').value;
      var columns = document.querySelector('input[name="columns"]').value;
      var baseURL = document.querySelector('meta[name="base-url"]').getAttribute("content");
      if (columns <= 0 || rows <= 0) {
        console.error("Server responded with an error.");
        alert("kolom dan baris harus lebih dari angka 0.");
      }
      // Perform the AJAX request
      var xhr = new XMLHttpRequest();
      xhr.open("POST", baseURL + "generate", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onload = function () {
        // On success, update the page content
        if (this.status >= 200 && this.status < 400 ) {
          document.getElementById("fibonacci-table").innerHTML = this.response;
        } else {
          console.error("Server responded with an error.");
          alert("Permintaan kolom atau baris melebihi batas. Silahkan coba lagi.");
        }
      };
      xhr.onerror = function () {
        console.error("An error occurred during the AJAX request.");
      };
      // Send the form data
      xhr.send("rows=" + encodeURIComponent(rows) + "&columns=" + encodeURIComponent(columns));
    });
  }
});
