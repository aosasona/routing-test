<style>
  a {
    display: block;

    &:visited {
      color: blue;
    }
  }
</style>
<div id="app"></div>
<script>
  const app = document.getElementById("app");

  Link("/", "Home");
  Link("/about", "About");
  Link("/contact", "Contact");

  const path = window.location.pathname;
  if(path.trim() == "/") {
    Page("Home");
  } else if(path.trim() == "/about") {
    Page("About");
  } else if(path.trim() == "/contact") {
    Page("Contact");
  } else {
    Page("404");
  }

  function Link(href, text) {
    const link = document.createElement("a");
    link.setAttribute("href", href);
    link.textContent = text;
    app.appendChild(link);
  }

  function Page(text) {
    const box = document.createElement("div");
    box.setAttribute("class", "box");
    box.textContent = text;
    app.appendChild(box);
  }

</script>
