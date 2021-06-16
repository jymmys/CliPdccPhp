/**
 * 
 */
package org.sieca.everis.pdcc.model.transportista.transportista;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class TransportistaConsultarRq extends RequestBody{
	
	private String codigoTransportista;

	/**
	 * 
	 */
	public TransportistaConsultarRq() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @return the codigoTransportista
	 */
	public String getCodigoTransportista() {
		return codigoTransportista;
	}

	/**
	 * @param codigoTransportista the codigoTransportista to set
	 */
	public void setCodigoTransportista(String codigoTransportista) {
		this.codigoTransportista = codigoTransportista;
	}
	
   
}
