/**
 * 
 */
package org.sieca.everis.pdcc.model.oea;

/**
 * @author lmoremos
 *
 */
public class Adjunto {

	private String nombreArchivo;
	private String adjunto;
	
	
	/**
	 * 
	 */
	public Adjunto() {
		// TODO Auto-generated constructor stub
	}

	/**
	 * @param nombreArchivo
	 * @param archivo
	 */
	public Adjunto(String nombreArchivo, String adjunto) {
		super();
		this.nombreArchivo = nombreArchivo;
		this.adjunto = adjunto;
	}

	/**
	 * @return the nombreArchivo
	 */
	public String getNombreArchivo() {
		return nombreArchivo;
	}

	/**
	 * @param nombreArchivo the nombreArchivo to set
	 */
	public void setNombreArchivo(String nombreArchivo) {
		this.nombreArchivo = nombreArchivo;
	}

	/**
	 * @return the adjunto
	 */
	public String getAdjunto() {
		return adjunto;
	}

	/**
	 * @param adjunto the adjunto to set
	 */
	public void setAdjunto(String adjunto) {
		this.adjunto = adjunto;
	}
	
	
	
	

}
