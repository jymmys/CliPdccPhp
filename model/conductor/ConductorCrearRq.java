/**
 * 
 */
package org.sieca.everis.pdcc.model.conductor;

import org.sieca.everis.pdcc.model.util.RequestBody;

import java.util.List;

/**
 * @author ytorregl
 *
 */
public class ConductorCrearRq extends RequestBody{
	
	private List<Conductor> CONDUCTORES;

	/**
	 * 
	 */
	public ConductorCrearRq() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @return the conductores
	 */
	public List<Conductor> getConductores() {
		return CONDUCTORES;
	}

	/**
	 * @param conductores the conductores to set
	 */
	public void setConductores(List<Conductor> CONDUCTORES) {
		this.CONDUCTORES = CONDUCTORES;
	}
	
	

	

}
