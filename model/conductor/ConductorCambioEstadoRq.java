/**
 * 
 */
package org.sieca.everis.pdcc.model.conductor;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class ConductorCambioEstadoRq extends RequestBody{
	
	private Conductor CONDUCTOR;
  
	/**
	 * 
	 */
	public ConductorCambioEstadoRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	

	/**
	 * @param CONDUCTOR
	 */
	public ConductorCambioEstadoRq(Conductor CONDUCTOR) {
		this.CONDUCTOR = CONDUCTOR;
	}


	/**
	 * @return the CONDUCTOR
	 */
	public Conductor getCONDUCTOR() {
		return CONDUCTOR;
	}
	/**
	 * @param conductor the conductor to set
	 */
	public void setCONDUCTOR(Conductor CONDUCTOR) {
		this.CONDUCTOR = CONDUCTOR;
	}
	
     
     

}
