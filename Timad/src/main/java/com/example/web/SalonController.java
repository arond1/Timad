package com.example.web;

import java.util.ArrayList;
import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
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
		
		Magasin m1 = new Magasin();
		m1.setAdresse("ad");
		magasins.add(m1);
	}
	
	@RequestMapping(value="/magasins", method = RequestMethod.GET)
	@ResponseStatus(HttpStatus.OK)
	@ResponseBody
	List<Magasin> getMagasins(@RequestParam("ville") String ville){
		System.out.println(ville);
		return magasins;
	}

	@RequestMapping(value="/magasins", method = RequestMethod.POST)
	@ResponseStatus(HttpStatus.OK)
	@ResponseBody
	boolean getMagasins(@RequestBody Magasin magasin){
		System.out.println(magasin);
		return true;
	}
	
	@RequestMapping(value="/magasins", method = RequestMethod.GET)
	@ResponseStatus(HttpStatus.OK)
	@ResponseBody
	List<Magasin> getMagasinsNom(@RequestParam("Nom") String nom){
		System.out.println(nom);
		return magasins;
	}
	
	@RequestMapping(value="/magasins", method = RequestMethod.GET)
	@ResponseStatus(HttpStatus.OK)
	@ResponseBody
	List<Magasin> getMagasinsAdresse(@RequestParam("Adresse") String adresse){
		System.out.println(adresse);
		return magasins;
	}
	@RequestMapping(value="/magasins", method = RequestMethod.GET)
	@ResponseStatus(HttpStatus.OK)
	@ResponseBody
	List<Magasin> getMagasinsNom(@RequestParam("CodePostal") int code){
		System.out.println(code);
		return magasins;
	}

	
}
