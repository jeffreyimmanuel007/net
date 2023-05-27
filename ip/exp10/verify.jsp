<html>
  <body>
    <% String username=request.getParameter("username"); String
    password=request.getParameter("password"); if(username != null && password
    != null && username.equals("admin") && password.equals("admin")) {
    session.setAttribute("username",username); Cookie cookie = new
    Cookie("username",username); cookie.setMaxAge(365 * 24 * 60 * 60);
    response.addCookie(cookie); response.sendRedirect("home.jsp"); }else {
    response.sendRedirect("invalid.html"); } %>
  </body>
</html>
