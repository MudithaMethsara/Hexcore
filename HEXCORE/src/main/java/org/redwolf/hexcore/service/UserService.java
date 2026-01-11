package org.redwolf.hexcore.service;

import com.google.gson.JsonObject;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import org.redwolf.hexcore.dto.UserDTO;
import org.redwolf.hexcore.util.AppUtil;

public class UserService {

    public String userLogin(UserDTO userDTO, HttpServletRequest request, HttpServletResponse response) {
        JsonObject jsonObject = new JsonObject();
        boolean status = false;
        String message = "";

        if (userDTO.getEmail() == null) {
            message = "Email is required";
        }else if (userDTO.getEmail().isBlank()) {
            message = "Email can not be empty";
        }else if (!userDTO.getEmail().matches(Validation)) {}

        return AppUtil.GSON.toJson(responseObject);
    }

}
