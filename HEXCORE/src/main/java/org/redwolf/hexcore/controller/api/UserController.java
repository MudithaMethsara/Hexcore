package org.redwolf.hexcore.controller.api;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.ws.rs.Consumes;
import jakarta.ws.rs.POST;
import jakarta.ws.rs.Path;
import jakarta.ws.rs.Produces;
import jakarta.ws.rs.core.Context;
import jakarta.ws.rs.core.MediaType;
import jakarta.ws.rs.core.Response;
import org.redwolf.hexcore.dto.UserDTO;
import org.redwolf.hexcore.util.AppUtil;

@Path("/users")

public class UserController {
    @Path("/login")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)

    public Response userLogin(String jsonData, @Context HttpServletRequest request, @Context HttpServletResponse response) {
        UserDTO userDTO = AppUtil.GSON.fromJson(jsonData, UserDTO.class);
        String responseJson = new UserService().userLogin(userDTO, request, response);

        return Response.ok().entity(responseJson).build();
    }
}
