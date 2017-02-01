package com.example.web;

import java.util.ArrayList;
import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.ResponseStatus;
import org.springframework.http.HttpStatus;

import com.example.domain.Magasin;

@Controller
public class SalonController {
	
	ArrayList<Magasin> magasins = new ArrayList<Magasin>();
	
	public SalonController(){
		Magasin m = new Magasin();
		m.setAdresse("azerty");
		magasins.add(m);
	}
	
	@RequestMapping(value="/magasins", method = RequestMethod.GET)
	@ResponseStatus(HttpStatus.OK)
	@ResponseBody
	List<Magasin> getMagasins(){
		return magasins;
	}



}
