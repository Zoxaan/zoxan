package com.example.demo.Entity;

public enum Role {
    USER("Пользвотаель"),
    ADMIN("Администатор");
    private final String name;

    Role(String name){this.name=name;}
}
