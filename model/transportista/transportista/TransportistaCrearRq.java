/**
 * 
 */
package org.sieca.everis.pdcc.model.transportista.transportista;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class TransportistaCrearRq extends RequestBody{
	
	private String transportista;

	/**
	 * 
	 */
	public TransportistaCrearRq() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @return the transportista
	 */
	public String getTransportista() {
		return transportista;
	}

	/**
	 * @param transportista the transportista to set
	 */
	public void setTransportista(String transportista) {
		this.transportista = transportista;
	}
	
	

}
