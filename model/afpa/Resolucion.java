/**
 * 
 */
package org.sieca.everis.pdcc.model.afpa;

/**
 * @author ytorregl
 *
 */
public class Resolucion {

	
	private String numeroResolucion;
	private String fechaResolucion;
	private String numeroCorrelativoInscripcion;
	private String resolucion;
	/**
	 * 
	 */
	public Resolucion() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param numeroResolucion
	 * @param fechaResolucion
	 * @param numeroCorrelativoInscripcion
	 * @param resolucion
	 */
	public Resolucion(String numeroResolucion, String fechaResolucion, String numeroCorrelativoInscripcion,
			String resolucion) {
		super();
		this.numeroResolucion = numeroResolucion;
		this.fechaResolucion = fechaResolucion;
		this.numeroCorrelativoInscripcion = numeroCorrelativoInscripcion;
		this.resolucion = resolucion;
	}
	/**
	 * @return the numeroResolucion
	 */
	public String getNumeroResolucion() {
		return numeroResolucion;
	}
	/**
	 * @param numeroResolucion the numeroResolucion to set
	 */
	public void setNumeroResolucion(String numeroResolucion) {
		this.numeroResolucion = numeroResolucion;
	}
	/**
	 * @return the fechaResolucion
	 */
	public String getFechaResolucion() {
		return fechaResolucion;
	}
	/**
	 * @param fechaResolucion the fechaResolucion to set
	 */
	public void setFechaResolucion(String fechaResolucion) {
		this.fechaResolucion = fechaResolucion;
	}
	/**
	 * @return the numeroCorrelativoInscripcion
	 */
	public String getNumeroCorrelativoInscripcion() {
		return numeroCorrelativoInscripcion;
	}
	/**
	 * @param numeroCorrelativoInscripcion the numeroCorrelativoInscripcion to set
	 */
	public void setNumeroCorrelativoInscripcion(String numeroCorrelativoInscripcion) {
		this.numeroCorrelativoInscripcion = numeroCorrelativoInscripcion;
	}
	/**
	 * @return the resolucion
	 */
	public String getResolucion() {
		return resolucion;
	}
	/**
	 * @param resolucion the resolucion to set
	 */
	public void setResolucion(String resolucion) {
		this.resolucion = resolucion;
	}
	
	



}
