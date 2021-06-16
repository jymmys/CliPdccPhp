/**
 * 
 */
package org.sieca.everis.pdcc.model.conductor;

/**
 * @author ytorregl
 *
 */
public class Solicitud {

	
	private String ESTATUS;

	/**
	 * 
	 */
	public Solicitud() {
		super();
	}

	/**
	 * @param ESTATUS
	 */
	public Solicitud(String ESTATUS) {
		this.ESTATUS = ESTATUS;
	}

	/**
	 * @return the ESTATUS
	 */
	public String getESTATUS() {
		return ESTATUS;
	}

	/**
	 * @param ESTATUS the ESTATUS to set
	 */
	public void setESTATUS(String ESTATUS) {
		this.ESTATUS = ESTATUS;
	}
	
	
	
}
