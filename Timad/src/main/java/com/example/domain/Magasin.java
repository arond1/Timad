package com.example.domain;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
public class Magasin {

	private int key;
	private String Nom;
	private String Adresse;
	private String Ville;
	private int CodePostal;
	private String Tel;
	
	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	public int getKey() {
		return key;
	}


	public void setKey(int key) {
		this.key = key;
	}


	public String getNom() {
		return Nom;
	}


	public void setNom(String nom) {
		Nom = nom;
	}


	public String getAdresse() {
		return Adresse;
	}


	public void setAdresse(String adresse) {
		Adresse = adresse;
	}


	public String getVille() {
		return Ville;
	}

	public void setVille(String ville) {
		Ville = ville;
	}

	public int getCodePostal() {
		return CodePostal;
	}

	public void setCodePostal(int codePostal) {
		CodePostal = codePostal;
	}

	public String getTel() {
		return Tel;
	}

	public void setTel(String tel) {
		Tel = tel;
	}

	public Magasin() {
		// TODO Auto-generated constructor stub
		
		
		
		
	}

}
