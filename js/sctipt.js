const menuButton = document.querySelector(".menu-toggle");
const navigation = document.querySelector(".site-nav");

if (menuButton && navigation) {
  menuButton.addEventListener("click", () => {
    const isOpen = menuButton.getAttribute("aria-expanded") === "true";
    menuButton.setAttribute("aria-expanded", String(!isOpen));
    navigation.classList.toggle("open", !isOpen);
  });

  navigation.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      menuButton.setAttribute("aria-expanded", "false");
      navigation.classList.remove("open");
    });
  });
}

const footerForm = document.querySelector("[data-footer-form]");

if (footerForm) {
  const submitButton = footerForm.querySelector('button[type="submit"]');
  const statusMessage = footerForm.nextElementSibling;

  footerForm.addEventListener("submit", async (event) => {
    event.preventDefault();
    submitButton.disabled = true;
    submitButton.textContent = "Sending...";
    statusMessage.textContent = "";
    statusMessage.classList.remove("error");

    try {
      const response = await fetch(footerForm.action, {
        method: "POST",
        body: new FormData(footerForm),
        headers: {
          Accept: "application/json",
        },
      });
      const result = await response.json();

      if (!response.ok || !result.ok) {
        throw new Error(result.message || "Unable to send your details right now.");
      }

      statusMessage.textContent = result.message;
      footerForm.reset();
    } catch (error) {
      statusMessage.textContent = error.message || "Unable to send your details right now.";
      statusMessage.classList.add("error");
    } finally {
      submitButton.disabled = false;
      submitButton.textContent = "Send";
    }
  });
}
