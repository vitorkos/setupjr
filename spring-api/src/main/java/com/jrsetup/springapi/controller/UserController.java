package com.jrsetup.springapi.controller;

import java.util.List;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.jrsetup.springapi.model.User;

@RestController
@RequestMapping
public class UserController {
	@GetMapping
	public List<User> test(){
		return List.of(
			new User("caralho",
			"test@gmail.com",
			"123",
			"234")
		);
	};
}
