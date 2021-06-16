/**
 * 
 */
package org.sieca.everis.pdcc.model.afpa;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class AuxiliarPublicoCrearRq extends RequestBody{
	
	private Inscripcion inscripcion;
    private String categoria;
    private Garantia garantia;
    private Resolucion resolucion;
        
	/**
	 * 
	 */
	public AuxiliarPublicoCrearRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the inscripcion
	 */
	public Inscripcion getInscripcion() {
		return inscripcion;
	}
	/**
	 * @param inscripcion the inscripcion to set
	 */
	public void setInscripcion(Inscripcion inscripcion) {
		this.inscripcion = inscripcion;
	}
	/**
	 * @return the categoria
	 */
	public String getCategoria() {
		return categoria;
	}
	/**
	 * @param categoria the categoria to set
	 */
	public void setCategoria(String categoria) {
		this.categoria = categoria;
	}
	/**
	 * @return the garantia
	 */
	public Garantia getGarantia() {
		return garantia;
	}
	/**
	 * @param garantia the garantia to set
	 */
	public void setGarantia(Garantia garantia) {
		this.garantia = garantia;
	}
	/**
	 * @return the resolucion
	 */
	public Resolucion getResolucion() {
		return resolucion;
	}
	/**
	 * @param resolucion the resolucion to set
	 */
	public void setResolucion(Resolucion resolucion) {
		this.resolucion = resolucion;
	}

    
}
