package org.redwolf.hexcore.util;

import java.io.IOException;
import java.io.InputStream;
import java.util.Properties;


public final class Env {

    private static final Properties PROPERTIES = new Properties();

    static {
        try {
            InputStream inputStream = Env.class.getClassLoader().getResourceAsStream("app.properties");
            PROPERTIES.load(inputStream); // This is line 13, causing the NullPointerException
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public static String get(String key) {
        return PROPERTIES.getProperty(key);
    }

    private Env() {}
}