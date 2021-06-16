/**
 * 
 */
package org.sieca.everis.pdcc.model.conductor;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class ConductorConsultarRq extends RequestBody{
	
	private String CODIGO_CONDUCTOR;

	/**
	 * 
	 */
	public ConductorConsultarRq() {
		super();
		// TODO Auto-generated constructor stub
	}

	
	
	/**
	 * @param CODIGO_CONDUCTOR
	 */
	public ConductorConsultarRq(String CODIGO_CONDUCTOR) {
		this.CODIGO_CONDUCTOR = CODIGO_CONDUCTOR;
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
	

}
