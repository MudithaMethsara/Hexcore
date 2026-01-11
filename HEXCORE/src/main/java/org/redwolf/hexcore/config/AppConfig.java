package org.redwolf.hexcore.config;

import org.glassfish.jersey.server.ResourceConfig;

public class AppConfig extends ResourceConfig {
    public AppConfig() {
        packages("org.redwolf.hexcore.controller");
        packages("org.redwolf.hexcore.middleware");
    }
}