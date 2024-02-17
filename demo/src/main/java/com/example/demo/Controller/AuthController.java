package com.example.demo.Controller;

import com.example.demo.Entity.UserEntity;
import com.example.demo.Service.UserService;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/registration")
@RequiredArgsConstructor
public class AuthController {
    private final UserService userService;


@GetMapping
    public String registerForm(){return "registration";}


    @PostMapping
    public String registerUser(UserEntity user){
    userService.registration(user);
    return "redirect:/login";
    }
}
