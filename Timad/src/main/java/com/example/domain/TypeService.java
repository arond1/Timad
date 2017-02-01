package com.example.domain;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

public class TypeService {
	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	private boolean Coiffure;
	private boolean Soin;
	private boolean Maquillage;
	private boolean CoiffureRenoi;
	private boolean Massage;
	private boolean Onglerie;
	private boolean Pedicure;
	
	
	public boolean isCoiffure() {
		return Coiffure;
	}


	public void setCoiffure(boolean coiffure) {
		Coiffure = coiffure;
	}


	public boolean isSoin() {
		return Soin;
	}


	public void setSoin(boolean soin) {
		Soin = soin;
	}


	public boolean isMaquillage() {
		return Maquillage;
	}


	public void setMaquillage(boolean maquillage) {
		Maquillage = maquillage;
	}


	public boolean isCoiffureRenoi() {
		return CoiffureRenoi;
	}


	public void setCoiffureRenoi(boolean coiffureRenoi) {
		CoiffureRenoi = coiffureRenoi;
	}


	public boolean isMassage() {
		return Massage;
	}


	public void setMassage(boolean massage) {
		Massage = massage;
	}


	public boolean isOnglerie() {
		return Onglerie;
	}


	public void setOnglerie(boolean onglerie) {
		Onglerie = onglerie;
	}


	public boolean isPedicure() {
		return Pedicure;
	}


	public void setPedicure(boolean pedicure) {
		Pedicure = pedicure;
	}


	public TypeService() {
		
	}

}
