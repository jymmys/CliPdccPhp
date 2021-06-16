/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class ManifiestoCargaConsultarRq extends RequestBody{
	
	private String numeroManifiesto;

	/**
	 * 
	 */
	public ManifiestoCargaConsultarRq() {
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
