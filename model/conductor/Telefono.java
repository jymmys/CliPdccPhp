/**
 * 
 */
package org.sieca.everis.pdcc.model.conductor;

/**
 * @author ytorregl
 *
 */
public class Telefono {
	

	private String MOVIL;
	private String FIJO;
	/**
	 * 
	 */
	public Telefono() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param MOVIL
	 * @param FIJO
	 */
	public Telefono(String MOVIL, String FIJO) {
		super();
		this.MOVIL = MOVIL;
		this.FIJO = FIJO;
	}
	/**
	 * @return the MOVIL
	 */
	public String getMOVIL() {
		return MOVIL;
	}
	/**
	 * @param MOVIL the MOVIL to set
	 */
	public void setMOVIL(String MOVIL) {
		this.MOVIL = MOVIL;
	}
	/**
	 * @return the FIJO
	 */
	public String getFIJO() {
		return FIJO;
	}
	/**
	 * @param FIJO the FIJO to set
	 */
	public void setFIJO(String FIJO) {
		this.FIJO = FIJO;
	}
	
	
	

}
