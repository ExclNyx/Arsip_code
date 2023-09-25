<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="beranda.css" />
  <title>Document</title>
</head>
<body>
    <nav>
      <div class="">
        <img src="img/logo.png" alt="my-avatar" />Kementerian Tata Ruang/ <br> Badan Pertanahan Nasional Kanwil Papua
      </div>

      <div id="menu-icon" class="menu-icon">
        <i class="ph-fill ph-list"></i>
      </div>
      <ul id="menu-list" class="hidden">
        <li>
          <a href="beranda.htm">Home</a>
        </li>
        <li>
          <a href="#">Profil</a>
        </li>
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Work</a>
        </li>
        <li>
          <a href="#">Tech Stack</a>
        </li>
        <li>
          <a href="index.html">exit</a>
        </li>
      </ul>
    </nav>
    <main>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus est
      in voluptatum nesciunt itaque. Voluptatibus ratione illum ducimus impedit
      minus itaque officia asperiores, maxime quis fugiat odit natus rerum ipsam
      quaerat corporis reprehenderit deleniti perspiciatis deserunt nostrum.
      Asperiores, rerum voluptatum!
    </main>
    <script>
    const menuIcon = document.getElementById("menu-icon");
    const menuList = document.getElementById("menu-list");

    menuIcon.addEventListener("click", () => {
    menuList.classList.toggle("hidden");
    });
</script>
  </body>
</body>
</html>