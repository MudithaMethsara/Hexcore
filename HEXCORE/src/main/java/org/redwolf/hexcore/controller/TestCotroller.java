package org.redwolf.hexcore.controller;
import jakarta.ws.rs.GET;
import jakarta.ws.rs.Produces;
import jakarta.ws.rs.core.MediaType;

public class TestCotroller {
    @GET
    @Produces(MediaType.TEXT_PLAIN)
    public String test() {
        return "OK";
    }
}
