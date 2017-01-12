package com.example.web;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class WebService {
	
	@RequestMapping("/URL")
	@ResponseBody
	public String Recherche(){
		return "Test";
	}
	
	public WebService() {
		// TODO Auto-generated constructor stub
	}

}
