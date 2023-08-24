var acc = document.getElementsByClassName("faq-accordion-product");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    var isActive = this.classList.contains("faq-active-active");
    
    // Mengubah status aktiv accordion yang diklik
    if (isActive) {
      this.classList.remove("faq-active-active");
      var panel = this.nextElementSibling;
      panel.style.maxHeight = null;
    } else {
      this.classList.add("faq-active-active");
      var panel = this.nextElementSibling;
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
