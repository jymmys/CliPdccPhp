/**
 * 
 */
package org.sieca.everis.pdcc.model.transbordoMercancia;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class TransbordoMercanciaEliminarRq extends RequestBody{
	
	private String numeroManifiesto;

	/**
	 * 
	 */
	public TransbordoMercanciaEliminarRq() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @return the numeroManifiesto
	 */
	public String getNumeroManifiesto() {
		return numeroManifiesto;
	}

	/**
	 * @param numeroManifiesto the numeroManifiesto to set
	 */
	public void setNumeroManifiesto(String numeroManifiesto) {
		this.numeroManifiesto = numeroManifiesto;
	}
	

}
