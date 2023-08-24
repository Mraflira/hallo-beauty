var accordion = document.getElementsByClassName("faq-accordion");
var d;

for (d = 0; d < accordion.length; d++) {
  accordion[d].addEventListener("click", function() {
    var isActive = this.classList.contains("faq-active");
    
    // Menutup semua accordion yang sedang terbuka
    for (var e = 0; e < accordion.length; e++) {
      accordion[e].classList.remove("faq-active");
      accordion[e].nextElementSibling.style.maxHeight = null;
    }
    
    // Membuka accordion yang diklik jika belum terbuka
    if (!isActive) {
      this.classList.add("faq-active");
      var panel = this.nextElementSibling;
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}