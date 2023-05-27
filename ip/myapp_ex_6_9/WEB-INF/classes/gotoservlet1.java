import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class gotoservlet1 extends HttpServlet {
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        out.println("<!DOCTYPE html>");
        out.println("<html>");
        out.println("<body>");
        out.println("<h1>" + request.getParameter("uname") + "</h1>");
        out.println("<h1>" + request.getParameter("uname2") + "</h1>");
        out.println("</body>");
        out.println("</html>");
    }
}