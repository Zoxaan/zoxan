package com.example.demo.Service;

import com.example.demo.Entity.Role;
import com.example.demo.Entity.UserEntity;
import com.example.demo.Repo.UserRepo;
import lombok.RequiredArgsConstructor;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;

import java.util.Collections;

@Service
@RequiredArgsConstructor
public class UserService {
    private final UserRepo userRepo;
private final PasswordEncoder passwordEncoder;

public void registration(UserEntity user){
    UserEntity user1 = new UserEntity();
user1.setUsername(user.getUsername());
user1.setPassword(passwordEncoder.encode(user.getPassword()));
user1.setRoles(Collections.singleton(Role.USER));
userRepo.save(user1);
}
}
