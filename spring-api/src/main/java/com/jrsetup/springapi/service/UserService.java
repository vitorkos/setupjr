package com.jrsetup.springapi.service;
import java.util.List;
import org.springframework.stereotype.Service;

import com.jrsetup.springapi.model.User;

@Service
public class UserService {

    public List<User> getUsers(){
		return List.of(
			new User("caralho",
			"test@gmail.com",
			"123",
			"234")
		);
	};
}
