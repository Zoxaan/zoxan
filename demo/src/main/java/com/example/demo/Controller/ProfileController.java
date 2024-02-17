package com.example.demo.Controller;

import com.example.demo.Entity.UserEntity;
import lombok.RequiredArgsConstructor;
import org.springframework.security.core.annotation.AuthenticationPrincipal;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
@Controller
@RequestMapping("/profile")
@RequiredArgsConstructor
public class ProfileController {
@GetMapping
    public String profile(@AuthenticationPrincipal UserEntity user , Model model){
model.addAttribute("user", user);
return"profile";
}
}
