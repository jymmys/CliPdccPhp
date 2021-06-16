/**
 * 
 */
package org.sieca.everis.pdcc.model.conductor;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * 
 * @author lmoremos
 *
 */
public class ConductorAsociarTransportistaRq extends RequestBody{
	
	private String CODIGO_CONDUCTOR;
	private String CODIGO_TRANSPORTISTA;
	
	/**
	 * 
	 */
	public ConductorAsociarTransportistaRq() {
		super();
		// TODO Auto-generated constructor stub
	}
		
	/**
	 * @param CODIGO_CONDUCTOR
	 * @param CODIGO_TRANSPORTISTA
	 */
	public ConductorAsociarTransportistaRq(String CODIGO_CONDUCTOR, String CODIGO_TRANSPORTISTA) {
		this.CODIGO_CONDUCTOR = CODIGO_CONDUCTOR;
		this.CODIGO_TRANSPORTISTA = CODIGO_TRANSPORTISTA;
	}


	/**
	 * @return the CODIGO_CONDUCTOR
	 */
	public String getCODIGO_CONDUCTOR() {
		return CODIGO_CONDUCTOR;
	}
	/**
	 * @param CODIGO_CONDUCTOR the CODIGO_CONDUCTOR to set
	 */
	public void setCODIGO_CONDUCTOR(String CODIGO_CONDUCTOR) {
		this.CODIGO_CONDUCTOR = CODIGO_CONDUCTOR;
	}
	/**
	 * @return the CODIGO_TRANSPORTISTA
	 */
	public String getCODIGO_TRANSPORTISTA() {
		return CODIGO_TRANSPORTISTA;
	}
	/**
	 * @param CODIGO_TRANSPORTISTA the CODIGO_TRANSPORTISTA to set
	 */
	public void setCODIGO_TRANSPORTISTA(String CODIGO_TRANSPORTISTA) {
		this.CODIGO_TRANSPORTISTA = CODIGO_TRANSPORTISTA;
	}

}
