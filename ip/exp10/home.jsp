<html>
  <body>
    <h1>
      Welcome back <% String username =
      session.getAttribute("username").toString(); if (username == null) {
      response.sendRedirect("invalid.html"); } else { out.println(username); }
      %>
    </h1>
  </body>
</html>
